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
Route::get('kategori', function(){
    return "hello user with id";
});
Route::get('detail_kategori/{id_kategori}', function($id_kategori){
    return "hello user with id_kategori" . $id_kategori;
});
Route::resource('film', 'FilmController')->except(['destroy']);
Route::resource('kategori', 'KategoriController')->except(['destroy']);
Route::resource('transaksi', 'TransaksiController')->except(['destroy']);

Route::get('master', function(){
    return view('Dashboard.index');
});

Route::get('template', function(){
    return view('dashboard.content');
  });