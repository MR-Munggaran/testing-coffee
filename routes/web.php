<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeansController;
use App\Http\Controllers\LoginController;

Route::get('/beans', [BeansController::class, 'index'])->name('catalog')->middleware('auth');
Route::get('/', [BeansController::class, 'showFirst'])->name('home')->middleware('auth');

Route::resource('distributors', DistributorController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('actionlogin', [LoginController::class, 'store'])->name('actionlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
