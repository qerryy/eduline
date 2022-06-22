<?php

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/kelas/{id}/', 'WelcomeController@show')->name('kelas');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/form/{id}/', 'HomeController@edit')->name('form');
Route::put('/form/{id}/', 'HomeController@update')->name('form.update');

Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function(){
	Route::resource('/user', 'UserController');
	Route::get('/table/user', 'UserController@dataTable')->name('table.user');

	Route::resource('/mapel', 'MapelController');
	Route::get('/table/mapel', 'MapelController@dataTable')->name('table.mapel');

	Route::resource('/jadwal', 'JadwalController');
	Route::get('/table/jadwal', 'JadwalController@dataTable')->name('table.jadwal');

	Route::resource('/transaksi', 'TransaksiController');
	Route::get('/table/transaksi', 'TransaksiController@dataTable')->name('table.transaksi');
});