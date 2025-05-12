<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('pages.auth.auth-signin');
// });

// Route::get('/login', function () {
//     return view('pages.auth.auth-signin');
// })->name('login');
// Route::get('/register', function () {
//     return view('pages.auth.auth-signup');
// })->name('register');
// Route::get('/forgot-password', function () {
//     return view('pages.auth.auth-forgot-pass');
// })->name('forgot-password');
// Route::get('/reset-password', function () {
//     return view('pages.auth.auth-reset-pass');
// })->name('reset-password');

// Route::middleware(['auth'])->group(function () {
//     Route::get('home', function () {
//         return view('pages.app.dashboard-siakad');
//     })->name('home');
// });

Route::get('/', function () {
    return redirect(auth()->check() ? route('home') : route('login'));
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('pages.app.index');
    })->name('home');
});

// Route::get('home', [HomeController::class, 'home'])->name('home');

// Route::middleware(['auth'])->group(function () {
//     Route::get('home', [HomeController::class, 'home'])->name('home');
// });

//Language Translation
// Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

// Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('index');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

//Update User Details
// Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
// Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
