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

Route::get('/home', 'HomeController@index');

Route::get('/editprofile', 'UserController@edit_penghuni_info');
Route::post('editprofile', 'UserController@save_penghuni_info')->name('editprofile');
Route::get('/pengumuman', 'MiscController@load_all_pengumuman');
Route::get('/edit_penghuni_info', 'UserController@edit_penghuni_info');
Route::post('/edit_penghuni_info', 'UserController@save_penghuni_info')->name('edit_penghuni_info');

Route::get('/blacklists/grid', 'BlacklistsController@grid');
Route::patch('/blacklists', 'BlacklistsController@update');
Route::resource('/blacklists', 'BlacklistsController');