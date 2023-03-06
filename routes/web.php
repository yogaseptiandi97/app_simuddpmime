<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiAkunController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login.create');
});

Route::get('/dashboard', DashboardController::class)->name('dashboard');

Route::controller(RegistrasiAkunController::class)->group(function() {
    Route::get('/registrasi-akun', 'index')->name('registrasi-akun');
    Route::get('/registrasi-akun/tambah', 'create')->name('registrasi-akun.create');
    Route::post('/registrasi-akun/tambah', 'store')->name('registrasi-akun.store');
});

/*
 * --------------------------------------------------------------------------
 * Middleware Otentikasi
 * --------------------------------------------------------------------------
 */

Route::middleware('auth')->group(function() {
});

/*
 * --------------------------------------------------------------------------
 * Middleware Guest
 * --------------------------------------------------------------------------
 */

Route::middleware('guest')->group(function() {
    /*
     * --------------------------------------------------------------------------
     * Route untuk Login
     * --------------------------------------------------------------------------
     */

    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'create')->name('login.create');
        Route::post('/login', 'store')->name('login.store');
    });
});
