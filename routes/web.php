<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\DepositlogController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\WithdrawlogController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\GameController;
use App\Http\Controllers\Frontend\PlayController;
use App\Http\Middleware\RedirectIfAuthenticated;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::middleware(['guest'])->group(function () {
    Route::get('/sign-up', [AuthController::class, 'signUpForm'])->name('sign-up');
    Route::post('/sign-up', [AuthController::class, 'signup'])->name('sign-up.post');
    Route::match(["get","post"],'/sign-in', [AuthController::class, 'signin'])->name('sign-in');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/deposit-log', [DepositlogController::class, 'depositlog'])->name('deposit.log');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/withdraw-log', [WithdrawlogController::class, 'withdrawlog'])->name('withdraw.log');
    Route::match(["get","post"],'/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/games', [GameController::class, 'games'])->name('games');
    Route::get('/games/{type}', [PlayController::class, 'play'])->name('play');
    Route::post('/check/{type}', [AuthController::class, 'checkExisting'])->name('checkExisting');
});

