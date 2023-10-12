<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\TopsisController;
use App\Http\Controllers\LaporanController;

Auth::routes();
Route::get('/',[HomeController::class,'index'], function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/Hr', [ViewController::class, 'IndexHR'])->name('HR');
Route::get('/Karyawan', [ViewController::class, 'IndexKaryawan'])->name('Karyawan');
Route::get('/Kriteria', [ViewController::class, 'IndexKriteria'])->name('Kriteria');

Route::prefix('Hasil-Penilaian')->group(function () {
    Route::get('/', [ViewController::class, 'IndexHasilPenilaian']);
    Route::get('/{periode}', [ViewController::class, 'HasilPenilaian'])->name('HasilPenilaian');
    Route::get('/{periode}/Matriks-Keputusan', [TopsisController::class, 'MatriksKeputusan'])->name('MatriksKeputusan');
    Route::get('/{periode}/Matriks-Terbobot', [TopsisController::class, 'MatriksTerbobot'])->name('MatriksTerbobot');
    Route::get('/{periode}/Solusi-Ideal', [TopsisController::class, 'SolusiIdeal'])->name('SolusiIdeal');
    Route::get('/{periode}/Jarak-Solusi-Ideal', [TopsisController::class, 'JarakSolusiIdeal'])->name('JarakSolusiIdeal');
    Route::get('/{periode}/Nilai-Preferensi', [TopsisController::class, 'NilaiPreferensi'])->name('NilaiPreferensi');
    Route::get('/{periode}/Index-Prestasi', [TopsisController::class, 'IndexPrestasi'])->name('IndexPrestasi');
});

Route::get('/Laporan', [LaporanController::class, 'IndexLaporan'])->name('Laporan');
Route::get('/Laporan/Karyawan', [LaporanController::class, 'LaporanKaryawan']);
Route::get('/Laporan/Hasil-Penilaian/{periodebln}-{periodethn}',[LaporanController::class,'LaporanHasilPenilaian']);

Route::get('/Refresh-Chart/{periode}', [TopsisController::class, 'RefreshChart'])->name('RefreshChart');

Route::Group(['middleware' => 'AdminMiddleware'], function () {
    Route::get('/Divisi', [ViewController::class, 'IndexDivisi'])->name('Divisi');

    Route::post('/HR/Insert',[AddController::class,'HRInsert']);
    Route::post('/Karyawan/Insert',[AddController::class,'KaryawanInsert']);
    Route::post('/Divisi/Insert',[AddController::class,'DivisiInsert']);

    Route::post('/HR/Update/{id_hr}',[EditController::class,'HRUpdate']);
    Route::post('/Karyawan/Update/{id_karyawan}',[EditController::class,'KaryawanUpdate']);
    Route::post('/Divisi/Update/{id_divisi}',[EditController::class,'DivisiUpdate']);

    Route::get('/HR/Delete/{id_hr}',[DeleteController::class,'HRDelete']);
    Route::get('/Karyawan/Delete/{id_karyawan}',[DeleteController::class,'KaryawanDelete']);
    Route::get('/Divisi/Delete/{id_divisi}',[DeleteController::class,'DivisiDelete']);
    Route::get('/Laporan/Human-Resource', [LaporanController::class, 'LaporanHR']);
});

Route::Group(['middleware' => 'HRMiddleware'], function () {
    Route::prefix('Periode')->group(function () {
        Route::get('/', [ViewController::class, 'IndexPeriode'])->name('Periode');
        Route::post('/Insert',[AddController::class,'PeriodeInsert']);
        Route::get('/{periode}/Daftar-Penilaian-Karyawan', [ViewController::class, 'IndexDaftarPenilaianKaryawan'])->name('DaftarPenilaianKaryawan');
        Route::get('/{periode}/Daftar-Penilaian-Karyawan/Karyawan/{id_karyawan}/Nilai',[EditController::class,'KaryawanNilai']);
        Route::post('/{periode}/Daftar-Penilaian-Karyawan/Karyawan/{id_karyawan}/Nilai/Post-Nilai',[EditController::class,'KaryawanPostNilai']);
    });
});
