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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function() {
    return view('principal');
});

//Route::get('/procedures', 'ProceduresController@listar');

Route::resource('/tests', 'TestsController');

Route::resource('/procedures', 'ProceduresController');

Route::resource('/listar', 'ListarController');

Route::resource('/users', 'UsersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
