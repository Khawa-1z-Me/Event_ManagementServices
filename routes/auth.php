<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;


// ================================== Start of New Codes =================================================
Route::middleware('guest')->group(function () {
    // -- Registration -- //
    Route::controller(RegisteredUserController::class)->group(function () {
        Route::get('register', 'create')->name('register');
        Route::post('register', 'store');
    });

    // -- Login -- //
    Route::controller(AuthenticatedSessionController::class)->group(function () {
        Route::get('login', 'create')->name('login');
        Route::post('login', 'store');
    });

    // -- Forgot / Reset Password -- //
    Route::name('password.')->group(function () {
        // send reset link
        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
             ->name('request');
        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
             ->name('email');

        // reset form + submit
        Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
             ->name('reset');
        Route::post('reset-password', [NewPasswordController::class, 'store'])
             ->name('update');
    });
});

Route::middleware('auth')->group(function () {
    // -- Email Verification --
    Route::name('verification.')->group(function () {
        // notice
        Route::get('verify-email', EmailVerificationPromptController::class)
             ->name('notice');

        // -- Link Verifier --
        Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
             ->middleware(['signed', 'throttle:6,1'])
             ->name('verify');

        // resend notification (throttle)
        Route::post('email/verification-notification', 
             [EmailVerificationNotificationController::class, 'store'])
             ->middleware('throttle:6,1')
             ->name('send');
    });

    // -- Confirm Password --
    Route::prefix('confirm-password')
         ->name('password.')
         ->controller(ConfirmablePasswordController::class)
         ->group(function () {
             Route::get('/', 'show')->name('confirm');
             Route::post('/', 'store');
         });

    // -- Logout --
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
         ->name('logout');
});
// ======================= End Of New Codes ======================================
