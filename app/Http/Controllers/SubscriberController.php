<?php

namespace App\Http\Controllers;

use App\Services\WhatsAppOtpService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SubscriberController extends Controller
{
    public function sendOnboardingOtp(Request $request, WhatsAppOtpService $whatsAppOtp)
    {
        $request->validate([
            'mobile' => ['required', 'max:12'],
        ]);

        $mobile = $request->get('mobile');
        $normalisedMobile = $this->normaliseOtpMobile($mobile);
        $existingOtp = session('subscriber_onboarding_pre_otp');
        $isResend = $request->boolean('resend');

        if (
            $existingOtp &&
            ($existingOtp['mobile'] ?? null) === $normalisedMobile &&
            !empty($existingOtp['expires_at']) &&
            now()->timestamp <= (int) $existingOtp['expires_at'] &&
            (int) ($existingOtp['attempts'] ?? 0) < 5
        ) {
            return response()->json([
                'message' => 'Verification code already sent to your WhatsApp number.',
                'masked_phone' => $this->maskedMobile($mobile),
                'already_sent' => true,
                'expires_in' => max(0, (int) $existingOtp['expires_at'] - now()->timestamp),
            ]);
        }

        $otp = (string) random_int(100000, 999999);
        $expiresAt = now()->addSeconds(60)->timestamp;

        if (!$whatsAppOtp->send($mobile, $otp)) {
            return response()->json([
                'message' => 'We could not send the WhatsApp code. Please configure the token or try again shortly.',
            ], 422);
        }

        session([
            'subscriber_onboarding_pre_otp' => [
                'mobile' => $normalisedMobile,
                'hash' => Hash::make($otp),
                'expires_at' => $expiresAt,
                'attempts' => 0,
            ],
        ]);

        return response()->json([
            'message' => 'Verification code sent to your WhatsApp number.',
            'masked_phone' => $this->maskedMobile($mobile),
            'already_sent' => false,
            'expires_in' => 60,
        ]);
    }

    public function verifyOnboardingOtp(Request $request)
    {
        $request->validate([
            'mobile' => ['required', 'max:12'],
            'otp' => ['required', 'digits:6'],
        ]);

        $otpSession = session('subscriber_onboarding_pre_otp');
        $mobile = $this->normaliseOtpMobile($request->get('mobile'));

        if (
            !$otpSession ||
            ($otpSession['mobile'] ?? null) !== $mobile ||
            empty($otpSession['hash']) ||
            empty($otpSession['expires_at']) ||
            now()->timestamp > (int) $otpSession['expires_at']
        ) {
            return response()->json([
                'message' => 'OTP expired. Please request a new code.',
            ], 422);
        }

        $attempts = (int) ($otpSession['attempts'] ?? 0);
        if ($attempts >= 5) {
            return response()->json([
                'message' => 'Too many incorrect attempts. Please request a new code.',
            ], 422);
        }

        if (!Hash::check($request->get('otp'), $otpSession['hash'])) {
            $otpSession['attempts'] = $attempts + 1;
            session(['subscriber_onboarding_pre_otp' => $otpSession]);

            return response()->json([
                'message' => 'The verification code is incorrect.',
            ], 422);
        }

        session([
            'subscriber_onboarding_otp_verified' => [
                'mobile' => $mobile,
                'verified_at' => now()->timestamp,
            ],
        ]);
        session()->forget('subscriber_onboarding_pre_otp');

        return response()->json([
            'message' => 'Phone number verified.',
        ]);
    }

    private function normaliseOtpMobile(?string $mobile): string
    {
        return preg_replace('/\D+/', '', (string) $mobile);
    }

    private function maskedMobile(?string $mobile): string
    {
        $digits = $this->normaliseOtpMobile($mobile);
        if (strlen($digits) <= 4) {
            return str_repeat('*', strlen($digits));
        }

        return substr($digits, 0, 2) . str_repeat('*', max(0, strlen($digits) - 4)) . substr($digits, -2);
    }
}
