<?php

//Route terdapat dalam package Illuminate.
// synonym "use" adalah "import", import digunakan di java.
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
Route::get('bio', 'App\Http\Controllers\DosenController@biodata');

