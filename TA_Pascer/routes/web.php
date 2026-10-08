<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PascerController;

Route::get('/dashboard', [PascerController::class, 'dashboard'])
    ->name('pascer.dashboard');

Route::get('/tagihan', [PascerController::class, 'tagihan'])
    ->name('pascer.tagihan');

Route::get('/pembayaran', [PascerController::class, 'pembayaran'])
    ->name('pascer.pembayaran');

Route::post('/pembayaran/konfirmasi', [PascerController::class, 'paymentConfirmation'])
    ->name('pascer.payment.confirmation');

Route::post('/pembayaran/berhasil', [PascerController::class, 'paymentSuccess'])
    ->name('pascer.payment.success');

Route::get('/riwayat', [PascerController::class, 'history'])
    ->name('pascer.history');

Route::get('/riwayat/{id}', [PascerController::class, 'historyDetail'])
    ->name('pascer.history.detail');

Route::get('/kiosku', [PascerController::class, 'kiosku'])
    ->name('pascer.kiosku');

Route::get('/kiosku/edit', [PascerController::class, 'kioskuEdit'])
    ->name('pascer.kiosku.edit');

Route::post('/kiosku/edit', [PascerController::class, 'updateKiosku'])
    ->name('pascer.kiosku.update');

Route::get('/notifikasi', [PascerController::class, 'notification'])
    ->name('pascer.notification');

Route::get('/pengaturan', [PascerController::class, 'pengaturan'])
    ->name('pascer.pengaturan');

Route::get('/panduan', [PascerController::class, 'guide'])
    ->name('pascer.guide');