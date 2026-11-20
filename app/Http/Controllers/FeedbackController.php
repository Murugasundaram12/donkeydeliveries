<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Pincode;
use App\Traits\VerifiesWhatsAppOtp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    use VerifiesWhatsAppOtp;

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email|max:150',
            'phone' => 'required',
            'area' => 'nullable|string|max:150',
            'pincode' => 'nullable|string|max:10',
            'category' => 'nullable|string|in:Subscriber,Rider',
            'message' => 'required|string',
            'join_immediately' => 'nullable|string',
            'option' => 'nullable|string',
        ]);

        $rawPhone = (string) $request->get('phone');
        $normalisedPhone = preg_replace('/\D+/', '', $rawPhone);
        if (strlen($normalisedPhone) === 12 && str_starts_with($normalisedPhone, '91')) {
            $normalisedPhone = substr($normalisedPhone, 2);
        }

        $isPublic = !Auth::check();

        if ($isPublic && config('services.whatsapp.onboarding_otp_enabled')) {
            if (!$this->hasVerifiedOtp($normalisedPhone) && !$this->hasVerifiedOtp($rawPhone)) {
                if ($request->expectsJson() || $request->ajax()) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Please verify your WhatsApp OTP before submitting.',
                        'requires_otp' => true,
                    ], 422);
                }

                return back()
                    ->withInput()
                    ->withErrors(['phone' => 'Please verify your WhatsApp OTP before submitting.']);
            }
        }

        // Prevent duplicate submissions within 5 minutes for the same mobile
        $recentEnquiry = Enquiry::where('mobile', $normalisedPhone)
            ->where('created_at', '>=', now()->subMinutes(5))
            ->first();

        if ($recentEnquiry) {
            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'status' => false,
                    'message' => 'An inquiry with this mobile number has already been submitted recently. Please wait before submitting again.',
                ], 422);
            }

            return back()
                ->withInput()
                ->withErrors(['phone' => 'An inquiry with this mobile number has already been submitted recently.']);
        }

        // Resolve pincode matching Enquiry storage logic
        $pincodeInput = trim((string) $request->input('pincode', ''));
        $pincodeVal = $pincodeInput;
        if ($pincodeInput !== '') {
            $findPincode = Pincode::where('pincode', $pincodeInput)->first()?->id;
            if ($findPincode !== null) {
                $pincodeVal = [(string) $findPincode];
            }
        }

        // Category mapping
        $category = $request->input('category');
        if (!$category || !in_array($category, ['Subscriber', 'Rider'], true)) {
            $category = 'Subscriber';
        }

        // Description mapping with referral source if provided
        $description = trim((string) $request->input('message', ''));
        if ($request->filled('option') && $request->input('option') !== 'how can we help') {
            $description .= "\n\n[Referral Source: " . $request->input('option') . "]";
        }

        // Priority / immediate join mapping (ficon)
        $joinImm = strtolower(trim((string) $request->input('join_immediately', '')));
        $ficon = in_array($joinImm, ['yes', '1', 'true'], true) ? 1 : 0;

        Enquiry::create([
            'name' => trim((string) $request->input('name')),
            'mailId' => trim((string) $request->input('email')),
            'mobile' => $normalisedPhone,
            'area' => trim((string) $request->input('area', '')),
            'pincode' => $pincodeVal,
            'category' => $category,
            'description' => $description,
            'ficon' => $ficon,
            'subscriberId' => 0,
            'emp_id' => 'web',
        ]);

        if ($isPublic && config('services.whatsapp.onboarding_otp_enabled')) {
            session()->forget('subscriber_onboarding_otp_verified');
        }

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'status' => true,
                'message' => 'Successfully Submitted!',
            ], 200);
        }

        return back()->with('success', 'Successfully Submitted!');
    }
}
