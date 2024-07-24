<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return view('index');
});

Route::get('/pageTiket', function () {
    return view('pageTiket');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');

Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/success', [CheckoutController::class, 'success'])->name('success');
