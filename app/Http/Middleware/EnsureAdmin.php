<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureAdmin
{
    /**
     * Menangani permintaan masuk ke aplikasi.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Memeriksa apakah pengguna sudah login dan memiliki peran admin
        if (Auth::check()) {
            // Jika peran admin, lanjutkan ke request berikutnya
            if (Auth::user()->role === 'admin') {
                return $next($request);
            }

            // Jika peran bukan admin (misalnya user), arahkan ke halaman utama
            return redirect('/');
        }

        // Jika pengguna tidak terautentikasi, alihkan mereka ke halaman login atau lainnya
        return redirect('/login');
    }
}
