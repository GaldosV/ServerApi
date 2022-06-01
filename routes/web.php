<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/usuarios','App\Http\Controllers\UsuarioController@index');// conseguir todos los registros
Route::post('/usuarios','App\Http\Controllers\UsuarioController@store');//crear un usuario
Route::put('/usuarios/{ID_TOKEN}','App\Http\Controllers\UsuarioController@update');// actualizar un registro
Route::delete('/usuarios/{ID_TOKEN}','App\Http\Controllers\UsuarioController@destroy');// eliminar un registro

Route::get('/usuarios/id/{ID_TOKEN}','App\Http\Controllers\UsuarioController@Selectuser');// conseguir un registro pasandole un id token
Route::post('/usuarios/opinion/{ID_TOKEN}','App\Http\Controllers\UsuarioController@updateOpinion');// actualizar la opinion
Route::post('/usuarios/poi','App\Http\Controllers\UsuarioController@updatePoi');// actualizar la poi
