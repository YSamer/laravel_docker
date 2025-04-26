<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'subscribed'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/checkout/{name}', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/checkout-success', [CheckoutController::class, 'success'])->name('checkout.success');
    Route::get('/checkout-cancel', [CheckoutController::class, 'cancel'])->name('checkout.cancel');
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

require __DIR__ . '/auth.php';
