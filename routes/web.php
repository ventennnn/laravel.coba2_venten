<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\GalleryController;

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);

// optional: biar kalau buka http://127.0.0.1:8000 langsung ke mahasiswa
Route::get('/', function () {
    return redirect('/mahasiswa');
});
