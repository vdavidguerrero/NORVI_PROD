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
    return view('landing');
});


Route::get('home/solicitud_personal', 'HomeController@solicitud_personal');
Route::get('calculadora', 'HomeController@calculadora');
Route::post('home/calcular', 'HomeController@calcular');
Route::get('home/calcular', 'HomeController@calculadora');

Auth::routes();
Route::resource('loans','LoanController');

Route::get('/home', 'HomeController@index')->name('home');
