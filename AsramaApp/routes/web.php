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

// Asrama
Route::get('/asrama', ['uses' => 'AsramaController@index']);
Route::get('/create_asrama', ['uses' => 'AsramaController@showCreateForm']);
Route::post('/create_asrama', ['uses' => 'AsramaController@create']);
Route::get('/edit_asrama/{id_asrama}', ['uses' => 'AsramaController@showEditForm']);
Route::post('/edit_asrama', ['uses' => 'AsramaController@edit']);
Route::post('/delete_asrama/{id_asrama}', ['uses' => 'AsramaController@delete']);

// Kamar
Route::get('/asrama/{id_asrama}', ['uses' => 'KamarController@index'])->name('kamar');
Route::get('/asrama/{id_asrama}/create_kamar', ['uses' => 'KamarController@showCreateForm']);
Route::post('/asrama/{id_asrama}/create_kamar', ['uses' => 'KamarController@create']);
Route::get('/asrama/{id_asrama}/edit_kamar/{id_kamar}', ['uses' => 'KamarController@showEditForm']);
Route::post('/asrama/{id_asrama}/edit_kamar', ['uses' => 'KamarController@edit']);
Route::post('/asrama/{id_asrama}/delete_kamar/{id_kamar}', ['uses' => 'KamarController@delete']);