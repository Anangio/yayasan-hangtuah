<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/daerah', [HomeController::class, 'daerah'])->name('daerah');
Route::get('/perwakilan', [HomeController::class, 'perwakilan'])->name('perwakilan');
Route::get('/e-learning', [HomeController::class, 'elearning'])->name('elearning');
Route::get('/sistem-informasi', [HomeController::class, 'sistemInformasi'])->name('sistem-informasi');