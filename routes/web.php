<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;



Route::get('/', [RegistrationController::class, 'loginindex'])->name('login');
Route::get('/registration', [RegistrationController::class, 'index'])->name('reg');
Route::post('/signup', [RegistrationController::class, 'register'])->name('registersignup');
Route::post('/check/user', [RegistrationController::class, 'check'])->name('check');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');