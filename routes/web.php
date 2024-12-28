<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use Illuminate\Support\Facades\Route;
use Filament\Facades\Filament;
use Filament\Http\Middleware\Authenticate;


Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/jadwals-by-tanggal', [HomeController::class, 'getJadwalsByTanggal']);


Route::group(['middleware' => ['auth']], function () {
    Route::get('/tiket',[PesanController::class, 'pemesan'])->name('pemesan');
    Route::post('/simpandata',[PesanController::class, 'simpandata'])->name('simpandata');
    Route::get('/history',[PesanController::class, 'historypesanan'])->name('historypesanan');
    Route::get('/detailpesanan/{id}', [PesanController::class, 'show'])->name('detailpesanan');
    Route::get('/view-tiket/{id}',[PesanController::class, 'viewtiket'])->name('view-tiket');

});




Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
