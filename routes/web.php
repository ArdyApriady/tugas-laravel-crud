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
    return view('home');
});

Route::get('/data-tables',function(){
    return view('dttables');
});

//tugas CRUD laravel
Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/create','PertanyaanController@create');
Route::post('/pertanyaan','PertanyaanController@store');

Route::get('/jawaban/{pertanyan_id}','JawabanController@index');
Route::post('/jawaban/{pertanyan_id}','JawabanController@store');

//tugas CRUD laravel 2
Route::get('/pertanyaan/{id}','PertanyaanController@show');
Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit');
Route::put('/pertanyaan/{id}','PertanyaanController@update');
Route::delete('/pertanyaan/{id}','PertanyaanController@destroy');