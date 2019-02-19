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

Route::get('/karyawan','KaryawanController@index');
Route::post('/karyawan','KaryawanController@store')->name('addimage');

Route::get('/karyawanpage','KaryawanController@display');

Route::get('/editimage/{id}','KaryawanController@edit');

Route::put('/updateimage/{id}','KaryawanController@update');

Route::get('/deleteimage/{id}','KaryawanController@delete');
