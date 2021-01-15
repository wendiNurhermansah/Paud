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

Route::get('/', 'MiftahulController@home');
Route::get('/profilesiswa', 'MiftahulController@profile');
Route::get('/prestasi', 'MiftahulController@prestasi');

Route::get('/sejarah', 'ProfileController@sejarah');
Route::get('/sambutan', 'ProfileController@sambutan');
Route::get('/visi&misi', 'ProfileController@visi');
Route::get('/dataguru', 'ProfileController@guru');


Route::get('/beritaPopular', 'BeritaController@berita');
Route::get('/infosekolah', 'BeritaController@info');
Route::get('/gallery', 'BeritaController@gallery');
