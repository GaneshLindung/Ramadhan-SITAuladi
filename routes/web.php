<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ramadan\HomeController;

Route::view('/', 'maintenance')->name('maintenance');
Route::get('/home', [HomeController::class, 'index'])->name('home');