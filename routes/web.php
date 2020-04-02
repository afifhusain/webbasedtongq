<?php

use Illuminate\Support\Facades\Route;

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
    return view('home.home');
});



// login Route
Route::get('/login', 'AuthController@auth');
Route::post('/loginQuery', 'AuthController@loginQuery');

// Register Route
Route::get('/register', 'AuthController@adduser');
Route::post('/registerquery', 'AuthController@adduserQuery');















Route::get('testing', function () {
	return "Halaman Testing";
});







Route::get('indexed', 'TestingController@indexed');

Route::get('variabel', 'TestingVariabel@index');

// controller testing
Route::get('/home', 'HomeController@index');
Route::get('/home/about', 'HomeController@about');
Route::get('/home/contact', 'HomeController@contact');

// CRUD with Query Builder
Route::get('/crud', 'CrudController@index');
Route::get('/crud/add', 'CrudController@add');
Route::post('/crud/store', 'CrudController@store');
Route::get('/crud/edit/{id}', 'CrudController@edit');
Route::post('/crud/update', 'CrudController@update');
Route::get('/crud/delete/{id}', 'CrudController@delete');
Route::get('/crud/search', 'CrudController@search');



// CRUD with eloquent

Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::put('/pegawai/update/{id}', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');


// Relation Route One to One

Route::get('pengguna', 'PenggunaController@index');


//Relation One To Many
Route::get('posts', 'PostController@index');

// Relation Many To Many
Route::get('hobi', 'HobiController@index');








