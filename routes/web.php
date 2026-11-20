<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\FeedbackController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::prefix('server-commands')->group(function () {
    Route::get('optimize', function () {
        \Artisan::call('optimize');
        \Artisan::call('config:clear');
        \Artisan::call('view:clear');
        \Artisan::call('route:cache');
        \Artisan::call('route:clear');
        dd("Done!");
    });
});


Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/service', [SiteController::class, 'service'])->name('service');
Route::get('/idea', [SiteController::class, 'idea'])->name('idea');
Route::get('/customer', [SiteController::class, 'customer'])->name('customer');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/privacy', [SiteController::class, 'privacy'])->name('privacy');
Route::get('/refund', [SiteController::class, 'refund'])->name('refund');
Route::get('/rider', [SiteController::class, 'rider'])->name('rider');
Route::get('/shoptc', [SiteController::class, 'shoptc'])->name('shoptc');
Route::get('/termsrider', [SiteController::class, 'termsrider'])->name('termsrider');
Route::get('/user_terms', [SiteController::class, 'user_terms'])->name('user_terms');

Route::post('/subscriber/onboarding/send-otp', [SubscriberController::class, 'sendOnboardingOtp'])->name('subscriber.onboarding.otp.send');
Route::post('/subscriber/onboarding/verify-otp', [SubscriberController::class, 'verifyOnboardingOtp'])->name('subscriber.onboarding.otp.verify');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback');
