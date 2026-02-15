<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ramadan\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/maintenance', 'maintenance')->name('maintenance');