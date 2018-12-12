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

Route::get('/dashboard', 'RumahSakitController@dashboard')->name('List');

// Rumah Sakit
Route::prefix('rumahsakit')->group(function(){
	Route::get('/','RumahSakitController@list')->name('rumahsakit.index');
	Route::get('/create', 'RumahSakitController@create')->name('rumahsakit.create');
	Route::post('/save', 'RumahSakitController@save')->name('rumahsakit.save');
	Route::get('/edit/{id}', 'RumahSakitController@edit')->name('rumahsakit.edit');
	Route::post('/update{id}', 'RumahSakitController@update')->name('rumahsakit.update');
	Route::get('/delete/{id}', 'RumahSakitController@delete')->name('rumahsakit.delete');
});
