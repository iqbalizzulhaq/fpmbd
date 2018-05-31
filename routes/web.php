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

Route::get('/pegawai', function () {
    return view('mbd.pegawai');
});
Route::get('/pemesan', function () {
    return view('mbd.pemesan');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/store','MainController@store')->name('store.trolly');
Route::get('/trolly', 'MainController@show')->name('show.trolly');

Route::get('/edit/{id}','MainController@edit')->name('edit.trolly');
Route::put('/update','MainController@update')->name('update.trolly');
Route::get('/delete/{id}','MainController@delete')->name('delete.trolly');

Route::get('/trolly', 'MainController@select')->name('select.trolly');

// SEMUA FUNGSI DAN ROUTE DI HALAMAN IQBAL
Route::get('/iqbal', function () {
    return view('iqbal');
});
Route::post('/iqbal', 'MainController@tanggal')->name('tanggal');
Route::get('/iqbal_trigger', 'MainController@trigger_zayn')->name('trigger_iqbal');



// SEMUA FUNGSI DAN ROUTE DI HALAMAN ZAYN
Route::get('/zaynnya', function () {
    return view('mbd.zaynnya');
});
Route::get('/zayn_function', function () {
    return view('zayn_function');
});
Route::post('/zayn_function', 'MainController@jml_pemesan')->name('jml_pemesan');
Route::get('/zayn_trigger', 'MainController@trigger_zayn')->name('trigger_zayn');

Route::get('/zayn_procedure', function () {
    return view('zayn_procedure');
});
Route::post('/zayn_procedure', 'MainController@status')->name('status');
Route::get('/hasil_proc', 'MainController@hasil_proc')->name('hasil_proc');