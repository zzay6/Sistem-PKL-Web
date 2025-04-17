<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/perusahaan', function () {
    return view('perusahaan');
});

Route::get('/buat-perusahaan', function () {
    return view('buat-perusahaan');
});

Route::get('/data-siswa', function () {
    return view('data-siswa');
});

Route::get('/tambah-siswa', function () {
    return view('perusahaan');
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

Route::get('/buat-lowongan', function () {
    return view('buat-lowongan');
});

Route::get('/lamaran', function () {
    return view('lamaran');
});
