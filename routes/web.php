<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RfidController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect()->route('login');
});

// Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

Auth::routes();

Route::get('/rfid/mode', [RfidController::class, 'mode'])->name('rfid.mode');


Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::group(['prefix' => 'admin'], function () {
            Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
            Route::resource('mapel', MapelController::class);
            Route::resource('kelas', KelasController::class);
            Route::resource('siswa', SiswaController::class);

            Route::resource('user', UserController::class);
            Route::get('setting', [SettingController::class, 'index'])->name('setting.index');
            Route::post('setting', [SettingController::class, 'update'])->name('setting.update');
        });
    });

    Route::group(['middleware' => ['role:guru|siswa']], function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
    });
});
