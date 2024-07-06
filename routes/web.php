<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//routte pagina inicio
Route::get('/pagina', 'App\Http\Controllers\ConnectController@getPagina')->name('pagina');
//err
//Route::get('/pagina', 'App\Http\Controllers\ConnectController@getConsultaPagina')->name('bd');

//Router Auth 
Route::get('/login', 'App\Http\Controllers\ConnectController@getLogin')->name('login'); //1pagina login
Route::post('/login', 'App\Http\Controllers\ConnectController@saveLogin')->name('save'); //2pagina login guardado de datos en base de datos 




//->paso 1 para agregar una pagina (view-vista) agregar un route, luego ir a connect controller
//#f1registro de datos de registro
Route::get('/registro', 'App\Http\Controllers\ConnectController@getRegistro')->name('registro');
Route::post('/registro', 'App\Http\Controllers\ConnectController@saveRegistro')->name('save');

Route::get('/dashboard','App\Http\Controllers\ConnectController@getdashboardLogin')->name('dashboard');
//no se usa
//Route::post('/registro', 'App\Http\Controllers\ConnectController@store')->name('registro');

//para traer registros de base de datos paso 1 crear ruta
//paso 2 crear controlador php artisan make:controller loginReturn
//Route::get('/login', 'App\Http\Controllers\loginReturn@index');

//Route::get('/login', 'App\Http\Controllers\loginReturn@getConsulta');


///
