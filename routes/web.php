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
Route::get('/', 'MusicController@index');
Route::get('/musics/create', 'MusicController@create');
Route::get('/musics/{music}', 'MusicController@show');
//Route::get('/musics/{post}/edit', 'MusicController@edit');
Route::post('/musics', 'MusicController@store');
//Route::put('/posts/{post}', 'MusicController@update');
//Route::get('/posts', 'MusicController@index');
