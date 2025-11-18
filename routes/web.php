<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeansController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\UploadController;


Route::get('/beans', [BeansController::class, 'index'])->name('catalog')->middleware('auth');
Route::get('/', [BeansController::class, 'showFirst'])->name('home')->middleware('auth');

Route::resource('distributors', DistributorController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('actionlogin', [LoginController::class, 'store'])->name('actionlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/upload/create', [UploadController::class, 'create'])->name('uploads.create');
Route::post('/upload', [UploadController::class, 'store'])->name('uploads.store');
