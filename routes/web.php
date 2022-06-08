<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
Las rutas web del REST-API son las que se consigue cuando escribes solo la URL
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuarios','App\Http\Controllers\UsuarioController@index');// conseguir todos los registros
Route::post('/usuarios/store','App\Http\Controllers\UsuarioController@store');//crear un usuario
Route::put('/usuarios/{id_token}','App\Http\Controllers\UsuarioController@update');// actualizar un registro
Route::delete('/usuarios/{id_token}','App\Http\Controllers\UsuarioController@destroy');// eliminar un registro

Route::get('/usuarios/id/{id_token}','App\Http\Controllers\UsuarioController@Selectuser');// conseguir un registro pasandole un id token
Route::post('/usuarios/opinion/{id_token}','App\Http\Controllers\UsuarioController@updateOpinion');// actualizar la opinion
Route::post('/usuarios/poi','App\Http\Controllers\UsuarioController@updatePoi');// actualizar la poi

