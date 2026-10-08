<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/lapor', [LaporBanjirController::class, 'form'])
    ->name('lapor.form');

Route::post('/lapor', [LaporBanjirController::class, 'store'])
    ->name('lapor.store');

Route::get('/lapor/konfirmasi', [LaporBanjirController::class, 'konfirmasi'])
    ->name('lapor.konfirmasi');

Route::get('/laporan', [LaporBanjirController::class, 'daftar'])
    ->name('lapor.daftar');