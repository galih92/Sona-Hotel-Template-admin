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
	return view('/pengunjung/dashboard');
});

//pengunjung
Route::get('/dashboard','ViewController@dashboard');
Route::get('/room','ViewController@room');
Route::get('/about','ViewController@about');
Route::get('/news','ViewController@news');
Route::get('/detail_news','ViewController@detail_news');
Route::get('/galery','ViewController@galery');
Route::get('/contact','ViewController@contact');

//admin
Route::get('/login','LoginController@login');
Route::get('/dashboard1','DashboardController@Dashboard1');
Route::get('/dashboard','DashboardController@Dashboard');

Route::get('/ruangan','RuanganController@index');
Route::get('/transaksi','TransaksiController@index');
Route::get('/reservasi','ReservasiController@index');
Route::get('/tamu','TamuController@index');
Route::get('/konten','KontenController@index');
Route::get('/galeri','GaleriController@index');
Route::get('/profil','ProfilController@index');
Route::get('/user','UserController@index');