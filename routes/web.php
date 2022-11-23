<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/fav', function () {
    return view('fav');
})->name('fav');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/seller', function () {
    return view('seller.loginseller');
})->name('loginseller');

Route::get('/sellerreg', function () {
    return view('seller.regisseller');
})->name('regisseller');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/profileedit', function () {
    return view('profile-edit');
})->name('profile-edit');

Route::get('/checkoutdetail', function () {
    return view('checkout-detail');
})->name('checkout-detail');

Route::get('/checkoutpayment', function () {
    return view('checkout-payment');
})->name('checkout-payment');

Route::get('/checkoutcomplete', function () {
    return view('checkout-complete');
})->name('checkout-complete');