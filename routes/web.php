<?php
//auto direct to mahasiswa when first time
use App\Http\Controllers\MahasiswaController;
Route::get('/', function () {
    return redirect('/mahasiswa');
});

//other routes
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('/mahasiswa/tambah', 'MahasiswaController@tambah')->name('tambah');
Route::post('/mahasiswa/store', 'MahasiswaController@store')->name('mahasiswa.store');
Route::get('/mahasiswa/{nim}/edit', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::post('/mahasiswa/update', 'MahasiswaController@update')->name('mahasiswa.update');
Route::get('/mahasiswa/hapus/{nim}', 'MahasiswaController@hapus')->name('mahasiswa.hapus');

/*
Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');
Route::get('/mahasiswa/tambah', 'App\Http\Controllers\MahasiswaController@tambah');
Route::get('/mahasiswa/store', 'App\Http\Controllers\MahasiswaController@store');
Route::get('/mahasiswa/edit', 'App\Http\Controllers\MahasiswaController@edit');
Route::get('/mahasiswa/update', 'App\Http\Controllers\MahasiswaController@update');
Route::get('/mahasiswa/hapus', 'App\Http\Controllers\MahasiswaController@hapus');
*/


