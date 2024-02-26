<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
