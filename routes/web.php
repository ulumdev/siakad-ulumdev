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
    return view('pages.app.dashboard-siakad');
});

Route::get('/login', function () {
    return view('pages.auth.auth-signin');
})->name('login');
Route::get('/register', function () {
    return view('pages.auth.auth-signup');
})->name('register');
Route::get('/forgot-password', function () {
    return view('pages.auth.auth-forgot-pass');
})->name('forgot-password');
Route::get('/reset-password', function () {
    return view('pages.auth.auth-reset-pass');
})->name('reset-password');
