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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin/', 'DashboardController@index')->name('dashboard');
Route::get('/admin/produk', 'ProdukController@index')->name('produk');
    Route::get('/admin/produk/create', 'ProdukController@create')->name('produk.create');
    Route::post('/admin/produk/create', 'ProdukController@store')->name('produk.store');
    Route::get('/admin/produk/edit/{id}', 'ProdukController@edit')->name('produk.edit');
    Route::patch('/admin/produk/edit/{id}', 'ProdukController@update')->name('produk.update');
    Route::get('/admin/produk/destroy/{id}', 'ProdukController@destroy')->name('produk.destroy');

    Route::get('/admin/pesanan', 'PesananController@index')->name('pesanan');
    Route::get('/admin/pesanan/konfirmasi/{id}', 'PesananController@konfirmasi')->name('pesanan.konfirmasi');
    Route::get('/admin/pesanan/destroy/{id}', 'PesananController@destroy')->name('pesanan.destroy');

    Route::get('/admin/news', 'NewsController@index')->name('news');
    Route::get('/admin/news/create', 'NewsController@create')->name('news.create');
    Route::post('/admin/news/create', 'NewsController@store')->name('news.store');
    Route::get('/admin/news/edit/{id}', 'NewsController@edit')->name('news.edit');
    Route::patch('/admin/news/edit/{id}', 'NewsController@update')->name('news.update');
    Route::get('/admin/news/destroy/{id}', 'NewsController@destroy')->name('news.destroy');




Route::get('/', 'FrontEndController@index')->name('userindex');
Route::get('/produk', 'FrontEndController@produk')->name('userproduk');
Route::get('/produk/{id}', 'FrontEndController@detail')->name('userdetail');
Route::get('/pesan/{id}', 'FrontEndController@pesan')->name('userpesan');
Route::post('/pesan', 'FrontEndController@pesansubmit')->name('userpesansubmit');


