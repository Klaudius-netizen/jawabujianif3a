<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('home');
})->name('home');

// routes/web.php

Route::get('/buku', [BukuController::class, 'index'])->name('buku');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');

Route::get('/pinjambuku', function () {
    return view('pinjam');
})->name('pinjam');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::post('/register', [AnggotaController::class, 'store'])->name('signup');
