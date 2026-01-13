<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ramadan\HomeController;
use App\Http\Controllers\Ramadan\ProfileController;
use App\Http\Controllers\Ramadan\ScheduleController;
use App\Http\Controllers\Ramadan\VideoController;
use App\Http\Controllers\Ramadan\WorshipController;
use App\Http\Controllers\Ramadan\GalleryController;
use App\Http\Controllers\Ramadan\ArticleController;
use App\Http\Controllers\Ramadan\CompetitionController;
use App\Http\Controllers\Ramadan\AnnouncementController;
use App\Http\Controllers\Ramadan\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [ProfileController::class, 'index'])->name('profile');
Route::get('/jadwal', [ScheduleController::class, 'index'])->name('schedule');
Route::get('/materi', [VideoController::class, 'index'])->name('videos');

Route::get('/tadarus', [WorshipController::class, 'index'])->name('worship');
Route::post('/tadarus/laporan', [WorshipController::class, 'store'])->name('worship.store');

Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery');

Route::get('/artikel', [ArticleController::class, 'index'])->name('articles');
Route::get('/artikel/{slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/lomba', [CompetitionController::class, 'index'])->name('competitions');
Route::post('/lomba/daftar', [CompetitionController::class, 'register'])->name('competitions.register');

Route::get('/pengumuman', [AnnouncementController::class, 'index'])->name('announcements');

Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::post('/kontak', [ContactController::class, 'send'])->name('contact.send');
