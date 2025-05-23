<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/perusahaan', function () {
    return view('perusahaan');
});

Route::get('/tambah-perusahaan', function () {
    return view('tambah-perusahaan');
});

Route::get('/data-siswa', function () {
    return view('data-siswa');
});

Route::get('/tambah-siswa', function () {
    return view('tambah-siswa');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/tambah-admin', function () {
    return view('tambah-admin');
});

Route::get('/lowongan', function () {
    return view('lowongan');
});

Route::get('/tambah-lowongan', function () {
    return view('tambah-lowongan');
});

Route::get('/lamaran', function () {
    return view('lamaran');
});
Route::get('/buat-admin', function () {
    return view('buat-admin');
});
