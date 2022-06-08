<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
Rutas de API  estas son las rutas que salen cuando escribes la URL del server + /api
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/usuarios','App\Http\Controllers\UsuarioController@index');// conseguir todos los registros

Route::post('/usuarios/store','App\Http\Controllers\UsuarioController@store');//crear un usuario

Route::put('/usuarios/{id_token}','App\Http\Controllers\UsuarioController@update');// actualizar un registro
Route::delete('/usuarios/{id_token}','App\Http\Controllers\UsuarioController@destroy');// eliminar un registro

Route::get('/usuarios/id/{id_token}','App\Http\Controllers\UsuarioController@Selectuser');// conseguir un registro pasandole un id token
Route::post('/usuarios/opinion/{id_token}','App\Http\Controllers\UsuarioController@updateOpinion');// actualizar la opinion
Route::post('/usuarios/poi','App\Http\Controllers\UsuarioController@updatePoi');// actualizar la poi
Route::post('/usuarios/location','App\Http\Controllers\UsuarioController@updatelocalizacion');// actualizar la poi

