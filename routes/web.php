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
    return view('index');
});

Route::get('/register', function () {
    return view('registration');
});
Route::post('register/store', 'SteganoController@register');

Route::get('encode', 'SteganoController@index');

Route::post('encode/embed', 'SteganoController@analyze');
