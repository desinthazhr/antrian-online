<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/pengunjung-liveAntrian', function () {
    return view('pengunjung-liveAntrian');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/pengunjung', function () {
    return view('pengunjung-ambilAntrian');
});

Route::get('/admin', function () {
    return view('admin-dashboard');
});

Route::get('/antrian-admin', function () {
    return view('admin-antrian-page');
});

Route::get('/kelola-antrian', function () {
    return view('admin-kelolaAntrian');
});

Route::get('/riwayat-antrian', function () {
    return view('admin-riwayatAntrian');
});

Route::get('/rekapan-dana', function () {
    return view('admin');
});

Route::get('/test-koneksi-database', function () {
    try {
        \DB::connection()->getPdo();

        echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        echo 'Belum terkoneksi database, error: ' . $e->getMessage();
    }
});

// Route::post('/buat-antrian', 'AntrianController@buatAntrian')->name('create');
Route::post('/pengunjung/buat-antrian', 'AntrianController@buatAntrian')->name('create');
