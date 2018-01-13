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
    return view('login');
});

Route::get('getPeserta', 'PesertaController@getPeserta');

Route::get('data-peserta', 'PesertaController@show');

Route::get('importData', 'ExcelController@index');

Route::get('downloadExcel/{type}', 'ExcelController@downloadExcel');

Route::post('importExcel', 'ExcelController@importExcel');

Route::post('register', 'PesertaController@register');

Route::get('checkIfExist', 'PesertaController@checkPeserta');

Route::get('/{no_peserta}', 'PesertaController@dataPeserta');