<?php

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

// Rute Landingpage

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/mitra-perusahaan', function () {
    return view('mitra-perusahaan');
});

Route::get('/mitra-sekolah', function () {
    return view('mitra-sekolah');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/login', function () {
    return view('sigin');
});


// Rute Admin
Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/data-admin', function () {
    return view('admin.dataAdmin');
});
Route::get('/tambah-admin', function () {
    return view('admin.tambahAdmin');
});

Route::get('/edit-admin', function () {
    return view('admin.editAdmin');
});


Route::get('/data-sekolah', function () {
    return view('admin.dataSekolah');
});
Route::get('/tambah-sekolah', function () {
    return view('admin.tambahSekolah');
});

Route::get('/edit-sekolah', function () {
    return view('admin.editSekolah');
});

Route::get('/data-industri', function () {
    return view('admin.dataIndustri');
});

Route::get('/tambah-industri', function () {
    return view('admin.tambahIndustri');
});

Route::get('/edit-industri', function () {
    return view('admin.editIndustri');
});

Route::get('/data-user', function () {
    return view('admin.datauser');
});

Route::get('/tambah-user', function () {
    return view('admin.tambahuser');
});

Route::get('/edit-user', function () {
    return view('admin.edituser');
});
Route::get('/laporan-gaji', function () {
    return view('admin.laporanGaji');
});
Route::get('/report', function () {
    return view('admin.report');
});

