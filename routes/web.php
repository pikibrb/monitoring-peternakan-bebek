<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')
        ->name('dashboard');

    Route::view('data-bebek', 'ducks.index')
        ->name('data-bebek');

    Route::view('monitoring-pertumbuhan', 'monitoring.index')
        ->name('monitoring-pertumbuhan');

    Route::view('produksi-telur', 'production.index')
        ->name('produksi-telur');

    Route::view('penjualan', 'sales.index')
        ->name('penjualan');

    Route::view('laporan-dan-riwayat', 'reports.index')
        ->name('laporan-dan-riwayat');

    Route::view('pengaturan', 'settings.index')
        ->name('pengaturan');
});

require __DIR__.'/auth.php';