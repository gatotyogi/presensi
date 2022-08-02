<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RfidController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect()->route('beranda');
});

Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::group(['prefix' => 'admin'], function () {
            Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
            Route::resource('kelas', KelasController::class);
            Route::resource('mapel', MapelController::class);
            Route::resource('siswa', SiswaController::class);
            Route::resource('guru', GuruController::class);
            Route::resource('absen', AbsenController::class);
            Route::resource('jadwal', JadwalController::class);
            Route::resource('report', ReportController::class);
            Route::resource('setting', SettingsController::class);
        });
    });

    Route::group(['middleware' => ['role:guru']], function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
    });
});


Route::group(['prefix' => 'rfid'], function () {
    Route::get('/', [RfidController::class, 'index'])->name('rfid.index');
    Route::get('/mode', [RfidController::class, 'mode'])->name('rfid.mode_update');
    Route::get('/card/{uuid}', [RfidController::class, 'card'])->name('rfid.card');
    Route::get('/cekkartu', function () {
        return view('pages.beranda.components.card');
    });
});
