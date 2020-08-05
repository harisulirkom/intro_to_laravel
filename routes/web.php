<?php

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
    return view('welcome');
});

Route::get('Halo', function() {
	return "Bismillah Belajar Larvel di Tahun 2020";


});

Route::get('blog', function(){
	return view('blog');
});

Route::get('dosen','DosenController@index');

//Route::get('pegawai', 'PegawaiC@index');

Route::get('/formulir', 'PegawaiC@formulir');
Route::post('/formulir/proses', 'PegawaiC@proses');
Route::get('blog', 'BlogC@home');
Route::get('blog/tentang', 'BlogC@tentang');
Route::get('blog/kontak', 'BlogC@kontak');
Route::get('blog/DataPegawai', 'PegawaiC@index');
Route::get('blog/tambah','PegawaiC@tambah');
//route CRUD
Route::get('pegawai', 'PegawaiC@index');
//route bertugas menangani data 
Route::post('/pegawai/store','PegawaiC@store');

