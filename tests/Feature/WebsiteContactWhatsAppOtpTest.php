<?php

namespace Tests\Feature;

use App\Models\Feedback;
use App\Services\WhatsAppOtpService;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Mockery;
use Tests\TestCase;

class WebsiteContactWhatsAppOtpTest extends TestCase
{
    use DatabaseTransactions;

    protected $connectionsToTransact = ['mysql', 'donkey'];

    protected function setUp(): void
    {
        parent::setUp();

        Config::set('services.whatsapp.onboarding_otp_enabled', true);
        Config::set('services.whatsapp.token', 'test-token');
        Config::set('services.whatsapp.otp_template', 'test_otp_template');
    }

    /**
     * 1. Contact page displays Send OTP button and CSRF meta token.
     */
    public function test_contact_page_displays_send_otp_button_and_csrf_meta(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('<meta name="csrf-token"', false);
        $response->assertSee('id="contactSendOtpBtn"', false);
        $response->assertSee('id="contactOtpVerifiedText"', false);
        $response->assertSee('id="contactOtpModal"', false);
    }

    /**
     * 2. Send OTP request works.
     */
    public function test_send_otp_request_works(): void
    {
        $mock = Mockery::mock(WhatsAppOtpService::class);
        $mock->shouldReceive('send')->once()->andReturn(true);
        $this->app->instance(WhatsAppOtpService::class, $mock);

        $response = $this->postJson(route('subscriber.onboarding.otp.send'), [
            'mobile' => '9876543210',
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'already_sent' => false,
            'expires_in' => 60,
        ]);
        $response->assertJsonStructure(['message', 'masked_phone', 'already_sent', 'expires_in']);

        $this->assertNotNull(session('subscriber_onboarding_pre_otp'));
        $this->assertSame('9876543210', session('subscriber_onboarding_pre_otp.mobile'));
    }

    /**
     * 2b. Unexpired active OTP returns already_sent with remaining seconds.
     */
    public function test_unexpired_otp_returns_already_sent_with_remaining_seconds(): void
    {
        session([
            'subscriber_onboarding_pre_otp' => [
                'mobile' => '9876543210',
                'hash' => Hash::make('123456'),
                'expires_at' => now()->addSeconds(40)->timestamp,
                'attempts' => 0,
            ],
        ]);

        $response = $this->postJson(route('subscriber.onboarding.otp.send'), [
            'mobile' => '9876543210',
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'already_sent' => true,
        ]);
        $this->assertGreaterThan(0, $response->json('expires_in'));
    }

    /**
     * 2c. Expired OTP allows fresh Send OTP request without 422 error.
     */
    public function test_expired_otp_allows_fresh_send_otp_request(): void
    {
        session([
            'subscriber_onboarding_pre_otp' => [
                'mobile' => '9876543210',
                'hash' => Hash::make('111111'),
                'expires_at' => now()->subSeconds(20)->timestamp,
                'attempts' => 1,
            ],
        ]);

        $mock = Mockery::mock(WhatsAppOtpService::class);
        $mock->shouldReceive('send')->once()->andReturn(true);
        $this->app->instance(WhatsAppOtpService::class, $mock);

        $response = $this->postJson(route('subscriber.onboarding.otp.send'), [
            'mobile' => '9876543210',
            'resend' => false,
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'already_sent' => false,
            'expires_in' => 60,
        ]);
        $this->assertSame(0, session('subscriber_onboarding_pre_otp.attempts'));
        $this->assertFalse(Hash::check('111111', session('subscriber_onboarding_pre_otp.hash')));
    }

    /**
     * 3. Correct OTP verification succeeds.
     */
    public function test_correct_otp_verification_succeeds(): void
    {
        session([
            'subscriber_onboarding_pre_otp' => [
                'mobile' => '9876543210',
                'hash' => Hash::make('123456'),
                'expires_at' => now()->addSeconds(60)->timestamp,
                'attempts' => 0,
            ],
        ]);

        $response = $this->postJson(route('subscriber.onboarding.otp.verify'), [
            'mobile' => '9876543210',
            'otp' => '123456',
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'Phone number verified.',
        ]);

        $this->assertNull(session('subscriber_onboarding_pre_otp'));
        $verifiedSession = session('subscriber_onboarding_otp_verified');
        $this->assertNotNull($verifiedSession);
        $this->assertSame('9876543210', $verifiedSession['mobile']);
    }

    /**
     * 4. Incorrect OTP is rejected.
     */
    public function test_incorrect_otp_is_rejected(): void
    {
        session([
            'subscriber_onboarding_pre_otp' => [
                'mobile' => '9876543210',
                'hash' => Hash::make('123456'),
                'expires_at' => now()->addSeconds(60)->timestamp,
                'attempts' => 0,
            ],
        ]);

        $response = $this->postJson(route('subscriber.onboarding.otp.verify'), [
            'mobile' => '9876543210',
            'otp' => '999999',
        ]);

        $response->assertStatus(422);
        $response->assertJson([
            'message' => 'The verification code is incorrect.',
        ]);

        $this->assertSame(1, session('subscriber_onboarding_pre_otp.attempts'));
        $this->assertNull(session('subscriber_onboarding_otp_verified'));
    }

    /**
     * 5. Expired OTP is rejected.
     */
    public function test_expired_otp_is_rejected(): void
    {
        session([
            'subscriber_onboarding_pre_otp' => [
                'mobile' => '9876543210',
                'hash' => Hash::make('123456'),
                'expires_at' => now()->subSeconds(10)->timestamp,
                'attempts' => 0,
            ],
        ]);

        $response = $this->postJson(route('subscriber.onboarding.otp.verify'), [
            'mobile' => '9876543210',
            'otp' => '123456',
        ]);

        $response->assertStatus(422);
        $response->assertJson([
            'message' => 'OTP expired. Please request a new code.',
        ]);
        $this->assertNull(session('subscriber_onboarding_otp_verified'));
    }

    /**
     * 6. Changing mobile number invalidates verification.
     */
    public function test_changing_mobile_number_invalidates_verification(): void
    {
        session([
            'subscriber_onboarding_otp_verified' => [
                'mobile' => '9876543210',
                'verified_at' => now()->timestamp,
            ],
        ]);

        $response = $this->postJson(route('feedback'), [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '9111111111',
            'message' => 'Test message regarding service inquiry',
        ]);

        $response->assertStatus(422);
        $response->assertJson([
            'status' => false,
            'requires_otp' => true,
        ]);
    }

    /**
     * 7. Submitting without OTP is rejected.
     */
    public function test_submitting_without_otp_is_rejected(): void
    {
        $response = $this->postJson(route('feedback'), [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '9876543210',
            'message' => 'Test message without OTP verification',
        ]);

        $response->assertStatus(422);
        $response->assertJson([
            'status' => false,
            'requires_otp' => true,
            'message' => 'Please verify your WhatsApp OTP before submitting.',
        ]);
    }

    /**
     * 8. Submitting with a different phone number is rejected.
     */
    public function test_submitting_with_different_phone_number_is_rejected(): void
    {
        session([
            'subscriber_onboarding_otp_verified' => [
                'mobile' => '9876543210',
                'verified_at' => now()->timestamp,
            ],
        ]);

        $response = $this->postJson(route('feedback'), [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone' => '9876500000',
            'message' => 'Trying to submit under another phone',
        ]);

        $response->assertStatus(422);
        $response->assertJson([
            'status' => false,
            'requires_otp' => true,
        ]);
    }

    /**
     * 9. Verified form submission succeeds and creates Enquiry on donkey connection.
     */
    public function test_verified_form_submission_succeeds(): void
    {
        session([
            'subscriber_onboarding_otp_verified' => [
                'mobile' => '9876543210',
                'verified_at' => now()->timestamp,
            ],
        ]);

        $response = $this->postJson(route('feedback'), [
            'name' => 'Valid User',
            'email' => 'valid@example.com',
            'phone' => '9876543210',
            'area' => 'Valid Area',
            'pincode' => '600056',
            'category' => 'Rider',
            'message' => 'Everything verified and ready to submit.',
            'join_immediately' => 'yes',
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            'message' => 'Successfully Submitted!',
        ]);

        $this->assertDatabaseHas('enquiry', [
            'name' => 'Valid User',
            'mailId' => 'valid@example.com',
            'mobile' => '9876543210',
            'area' => 'Valid Area',
            'category' => 'Rider',
            'emp_id' => 'web',
            'subscriberId' => 0,
            'ficon' => 1,
        ], 'donkey');

        $this->assertNull(session('subscriber_onboarding_otp_verified'));
    }

    /**
     * 10. Duplicate submissions within 5 minutes are rejected.
     */
    public function test_duplicate_submission_prevented_within_5_minutes(): void
    {
        session([
            'subscriber_onboarding_otp_verified' => [
                'mobile' => '9876543210',
                'verified_at' => now()->timestamp,
            ],
        ]);

        // First submission succeeds
        $response1 = $this->postJson(route('feedback'), [
            'name' => 'First Submission',
            'email' => 'first@example.com',
            'phone' => '9876543210',
            'message' => 'First message',
        ]);
        $response1->assertStatus(200);

        // Reset verification for second submission
        session([
            'subscriber_onboarding_otp_verified' => [
                'mobile' => '9876543210',
                'verified_at' => now()->timestamp,
            ],
        ]);

        // Second submission with same phone is rejected
        $response2 = $this->postJson(route('feedback'), [
            'name' => 'Second Submission',
            'email' => 'second@example.com',
            'phone' => '9876543210',
            'message' => 'Second message',
        ]);
        $response2->assertStatus(422);
        $response2->assertJson([
            'status' => false,
            'message' => 'An inquiry with this mobile number has already been submitted recently. Please wait before submitting again.',
        ]);
    }

    /**
     * 11. Contact submission matches Admin Enquiry query and attributes.
     */
    public function test_contact_submission_matches_admin_enquiry_attributes(): void
    {
        session([
            'subscriber_onboarding_otp_verified' => [
                'mobile' => '9876543210',
                'verified_at' => now()->timestamp,
            ],
        ]);

        $this->postJson(route('feedback'), [
            'name' => 'Admin Visible Lead',
            'email' => 'lead@example.com',
            'phone' => '9876543210',
            'area' => 'Anna Nagar',
            'pincode' => '625022',
            'category' => 'Subscriber',
            'message' => 'Interested in prime partnership',
            'join_immediately' => 'yes',
        ])->assertStatus(200);

        $record = \App\Models\Enquiry::where('mobile', '9876543210')->latest()->first();
        $this->assertNotNull($record);
        $this->assertSame('Admin Visible Lead', $record->name);
        $this->assertSame('lead@example.com', $record->mailId);
        $this->assertSame('web', $record->emp_id);
        $this->assertSame('Subscriber', $record->category);
        $this->assertSame(1, (int) $record->ficon);
        $this->assertSame(0, (int) $record->subscriberId);
    }
}
