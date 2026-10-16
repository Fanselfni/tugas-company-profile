<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/kontak', function () {
    return view('page.kontak');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');