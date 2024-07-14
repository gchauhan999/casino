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
use App\Http\Controllers\Frontend\GamedetailsController;
use App\Http\Controllers\Frontend\PlayController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/deposit-log', [DepositlogController::class, 'depositlog'])->name('deposit.log');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::get('/withdraw-log', [WithdrawlogController::class, 'withdrawlog'])->name('withdraw.log');
Route::get('/sign-up', [AuthController::class, 'signup'])->name('sign-up');
Route::get('/sign-in', [AuthController::class, 'signin'])->name('sign-in');
Route::get('/games', [GameController::class, 'games'])->name(' games');
Route::get('/games/{type}', [PlayController::class, 'play'])->name(' play');
