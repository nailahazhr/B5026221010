<?php

use Illuminate\Support\Facades\Route;

/*--------------------------------------------------*/

Route::get('/', function () {
    return view('landing-page');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di bumi";
});

Route::get('halo2', function () {
    return "<h1> Maaf kamu kena prank </h1>";
});

Route::get('blog', function () {
	return view('blog');
});

//Buat Tugas PWEB
Route::get('file1', function () {
	return view('1-hello');
});
Route::get('file2-1', function () {
	return view('2-link');
});
Route::get('file2-2', function () {
	return view('2-style');
});
Route::get('file3', function () {
	return view('3-responsive');
});
Route::get('file4', function () {
	return view('4-landingPage');
});
Route::get('file5-1', function () {
	return view('5-javascript1');
});
Route::get('file5-2', function () {
	return view('5-javascript2');
});
Route::get('file6', function () {
	return view('6-validasi');
});
Route::get('file7', function () {
	return view('task-linktree');
});

//Route untuk controller
Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route untuk CRUD (pegawaicontroller)
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@viewed');

//route untuk BelanjaController
Route::get('/keranjangbelanja','App\Http\Controllers\BelanjaController@index');
Route::post('/keranjangbelanja/store','App\Http\Controllers\BelanjaController@store');
Route::get('/keranjangbelanja/tambah','App\Http\Controllers\BelanjaController@tambah');
Route::get('/keranjangbelanja/hapus/{ID}','App\Http\Controllers\BelanjaController@hapus');

//route untuk BelanjaController
Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiController@tambah');
Route::get('/nilaikuliah/hapus/{ID}','App\Http\Controllers\NilaiController@hapus');

//route untuk LaptopController
Route::get('/laptop','App\Http\Controllers\LaptopController@index');
Route::post('/laptop/store','App\Http\Controllers\LaptopController@store');
Route::get('/laptop/tambah','App\Http\Controllers\LaptopController@tambah');
Route::get('/laptop/cari','App\Http\Controllers\LaptopController@cari');
Route::get('/laptop/hapus/{id}','App\Http\Controllers\LaptopController@hapus');
Route::get('/laptop/edit/{id}','App\Http\Controllers\LaptopController@edit');
Route::post('/laptop/update','App\Http\Controllers\LaptopController@update');

//route untuk KaryawanController
Route::get('/Karyawan','App\Http\Controllers\KaryawanController@index');
Route::post('/Karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::get('/Karyawan/tambah','App\Http\Controllers\KaryawanController@tambah');
Route::get('/Karyawan/hapus/{id}','App\Http\Controllers\KaryawanController@hapus');
