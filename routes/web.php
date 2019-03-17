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


Route::resource('film', 'FilmController')->except(['destroy']);
Route::resource('kategori', 'KategoriController')->except(['destroy']);
Route::resource('transaksi', 'TransaksiController')->except(['destroy']);


Route::post('inputdata/store','KategoriController@store');
Route::get('/hapus/destroy/{id}', 'KategoriController@destroy');
Route::get('/kategoriedit/edit/{id}', 'KategoriController@edit');
Route::post('/datakategori/update','KategoriController@update');
