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
    return view('index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login','HomeController@login');

Route::get('/pembelian', function () {
    return view('layouts.pembelian');
});

Route::get('/bussiness_card', function () {
    return view('items.bussiness_card');
});
Route::get('/poster', function () {
    return view('items.poster');
});
Route::get('/brosur', function () {
    return view('items.brosur');
});
Route::get('/stempel', function () {
    return view('items.stempel');
});
Route::get('/amplop', function () {
    return view('items.amplop');
});


Route::get('/stiker', function () {
    return view('items.stiker');
});
Route::get('/pin', function () {
    return view('items.pin');
});

Route::get('/tumbler', function () {
    return view('items.tumbler');
});

Route::get('/mug', function () {
    return view('items.mug');
});

Route::get('/id_card', function () {
    return view('items.id_card');

});

Route::get('/banner', function () {
    return view('items.banner');
});

Route::get('/calender', function () {
    return view('items.calender');
});

Route::get('/form_pembelian', function () {
    return view('form_pembelian');
});

Route::get('/trolly', function () {
    return view('trolly');
});
Route::get('/mbd', function () {
    return view('mbd.mbd');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tabel_pemesan', 'HomeController@pemesan');
Route::get('/tabel_transaksi', 'HomeController@transaksi');
// Route::get('/mbd', 'HomeController@mbd');
Route::post('/store','HomeController@store')->name('store.trolly');