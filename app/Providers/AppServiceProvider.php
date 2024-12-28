<?php

namespace App\Providers;

use App\Http\Middleware\EnsureAdmin;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Menambahkan middleware untuk memastikan admin
        // Route::middleware('admin', EnsureAdmin::class);
    }

    /**
     * Mendapatkan middleware yang digunakan di aplikasi.
     */
    // protected function getMiddlewares(): array
    // {
    //     return [
    //         Authenticate::class, // Middleware autentikasi default Filament
    //     ];
    // }
}

