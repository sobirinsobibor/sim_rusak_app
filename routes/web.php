<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdministrasiController\DashboardController as adminDashboardController;
use App\Http\Controllers\FarmasiController\DashboardController as farmasiDashboardController;
use App\Http\Controllers\KeuanganController\DashboardController as keuanganDashboardController;
use App\Http\Controllers\LaboratoriumController\DashboardController as laboratoriumDashboardController;
use App\Http\Controllers\PoliklinikController\DashboardController as poliklinikDashboardController;
use App\Http\Controllers\PoliklinikController\AnakController\DashboardController as poliklinikAnakDashboardController;
use App\Http\Controllers\PoliklinikController\GigiDanMulutController\DashboardController as poliklinikGigiDanMulutDashboardController;
use App\Http\Controllers\PoliklinikController\MataController\DashboardController as poliklinikMataDashboardController;
use App\Http\Controllers\PoliklinikController\ObgynController\DashboardController as poliklinikObgynDashboardController;
use App\Http\Controllers\PoliklinikController\ThtController\DashboardController as poliklinikThtDashboardController;
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
    return view('login');
});
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//administrasi
Route::group(['middleware' => ['auth', 'administrasiMiddleware']], function () {
    Route::get('/administrasi', [adminDashboardController::class, 'index']);
});

//poliklinik
Route::group(['middleware' => ['auth', 'poliklinikMiddleware']], function () {

    Route::get('/poliklinik', [poliklinikDashboardController::class, 'index']);

    Route::group(['middleware' => ['administratorMiddleware']], function () {
        Route::group(['middleware' => ['gigiDanMulutMiddleware']], function () {
            Route::get('/poliklinik/gigi-dan-mulut', [poliklinikGigiDanMulutDashboardController::class, 'index']);
        });
        Route::group(['middleware' => ['anakMiddleware']], function () {
            Route::get('/poliklinik/anak', [poliklinikAnakDashboardController::class, 'index']);
        });
        Route::group(['middleware' => ['obgynMiddleware']], function () {
            Route::get('/poliklinik/obgyn', [poliklinikObgynDashboardController::class, 'index']);
        });
        Route::group(['middleware' => ['mataMiddleware']], function () {
            Route::get('/poliklinik/mata', [poliklinikMataDashboardController::class, 'index']);
        });
        Route::group(['middleware' => ['thtMiddleware']], function () {
            Route::get('/poliklinik/tht', [poliklinikThtDashboardController::class, 'index']);
        });
    });
    Route::group(['middleware' => ['dokterMiddleware']], function () {
        Route::group(['middleware' => ['gigiDanMulutMiddleware']], function () {
            Route::get('/poliklinik/gigi-dan-mulut/dokter', [poliklinikGigiDanMulutDashboardController::class, 'index']);
        });
        Route::group(['middleware' => ['anakMiddleware']], function () {
            Route::get('/poliklinik/anak/dokter', [poliklinikAnakDashboardController::class, 'index']);
        });
        Route::group(['middleware' => ['obgynMiddleware']], function () {
            Route::get('/poliklinik/obgyn/dokter', [poliklinikObgynDashboardController::class, 'index']);
        });
        Route::group(['middleware' => ['mataMiddleware']], function () {
            Route::get('/poliklinik/mata/dokter', [poliklinikMataDashboardController::class, 'index']);
        });
        Route::group(['middleware' => ['thtMiddleware']], function () {
            Route::get('/poliklinik/tht/dokter', [poliklinikThtDashboardController::class, 'index']);
        });

    });
    Route::group(['middleware' => ['perawatMiddleware']], function () {
        Route::group(['middleware' => ['gigiDanMulutMiddleware']], function () {
            Route::get('/poliklinik/gigi-dan-mulut/perawat', [poliklinikGigiDanMulutDashboardController::class, 'index']);
        });
        Route::group(['middleware' => ['anakMiddleware']], function () {
            Route::get('/poliklinik/anak/perawat', [poliklinikAnakDashboardController::class, 'index']);
        });
        Route::group(['middleware' => ['obgynMiddleware']], function () {
            Route::get('/poliklinik/obgyn/perawat', [poliklinikObgynDashboardController::class, 'index']);
        });
        Route::group(['middleware' => ['mataMiddleware']], function () {
            Route::get('/poliklinik/mata/perawat', [poliklinikMataDashboardController::class, 'index']);
        });
        Route::group(['middleware' => ['thtMiddleware']], function () {
            Route::get('/poliklinik/tht/perawat', [poliklinikThtDashboardController::class, 'index']);
        });
    });
});

//farmasi
Route::group(['middleware' => ['auth', 'farmasiMiddleware']], function () {
    Route::get('/farmasi', [farmasiDashboardController::class, 'index']);
});

//laboratorium
Route::group(['middleware' => ['auth', 'laboratoriumMiddleware']], function () {
    Route::get('/laboratorium', [laboratoriumDashboardController::class, 'index']);
});

//keuangan
Route::group(['middleware' => ['auth', 'keuanganMiddleware']], function () {
    Route::get('/keuangan', [keuanganDashboardController::class, 'index']);
});


