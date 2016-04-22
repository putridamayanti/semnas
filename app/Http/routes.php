<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/semnas/', function () {
    return view('welcome');
});

Route::get('/semnas/message', 'MessageController@add');

Route::auth();

Route::get('/semnas/home', 'HomeController@index');
Route::get('/semnas/peserta/{id}', 'PesertaController@peserta');
Route::get('/semnas/validasi/{id}', 'PesertaController@validasi');
Route::get('/semnas/decline/{id}', 'PesertaController@decline');
Route::get('/semnas/akun', 'PesertaController@akun');
Route::post('/semnas/editakun', 'PesertaController@editakun');
Route::get('/semnas/kartupeserta', function() {
    $name = 'kartupeserta.pdf';
    $pdf = PDF::loadView('peserta.kartu');

    return $pdf->download($name);
});