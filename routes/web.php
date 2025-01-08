<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DetailPinjamController;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('home');
})->name('home');

// routes/web.php

Route::get('/buku', [BukuController::class, 'index'])->name('buku');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');

Route::get('/daftar-peminjam', function () {
    return view('pinjam');
})->name('pinjam');

Route::get('/pinjambuku', [DetailPinjamController::class, 'create'])->name('pinjam.create');
Route::post('/detailpinjam', [DetailPinjamController::class, 'store'])->name('pinjam.store');

Route::get('/daftar-anggota', [AnggotaController::class, 'index'])->name('anggota');
Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
Route::post('/anggota', [AnggotaController::class, 'store'])->name('anggota.store');
