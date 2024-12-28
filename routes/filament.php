<?php

use Illuminate\Support\Facades\Route;
use Filament\Pages\Dashboard;

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', Dashboard::class)->name('filament.pages.dashboard');
    // Tambahkan rute lainnya yang diperlukan untuk panel admin Filament
});
