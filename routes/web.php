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
Route::get('/add-room', 'RoomController@create');
Route::post('/room','RoomController@store');
Route::get('/edit-room/{room}', 'RoomController@edit');
Route::put('/edit-room/{room}', 'RoomController@update');
Route::delete('room/{room}', 'RoomController@destroy');
Route::get('/add-person','PersonController@create');
Route::post('/add-person', 'PersonController@store');
Route::get('/edit-person/{person}', 'PersonController@edit');
Route::put('/edit-person/{person}', 'PersonController@update');
Route::delete('person/{person}', 'PersonController@destroy');
Route::get('sum', 'PersonController@sum');
