<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Metodo para devolver todos los usuarios de la base de datos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return $usuarios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Metodo para registrar un usuario nuevo
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario-> procedencia =  $request->procedencia;
        $usuario-> idioma =  $request->idioma;
        $usuario-> app_id = $request->app_id;
        $usuario-> id_token =  $request->id_token;

        $usuario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Metodo para Actualizar un usuario pasandole un ID_TOKEN  comprueba si el usuario existe y lo actualiza .
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $usuario = Usuario::query()->findOrFail($request->id_token);
        $usuario-> id_token =  $request->id_token;
        $usuario-> procedencia =  $request->procedencia;
        $usuario-> idioma =  $request->idioma;
        $usuario-> app_id = $request->app_id;

        $usuario->save();
       // return $usuario;
    }

    /**
     * Metodo para eliminar un usuario de la base de datos pasandole como parametro a la request el ID_TOKEN
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $usuario = Usuario::destroy( $request->id_token);
        return $usuario;
    }
    /**
     * QUERY PARA ver si existe un usuario especifico .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Selectuser(Request $request)
    {
        $usuarios = DB::table('usuarios')->where('ID_TOKEN',$request->id_token)->first();
        return $usuarios;
    }
    /**
     * Metodo para Actualizar la opinión de un usuario con un Id_token como parametro
     * si devuelve 0 es correcto y se a cambiado la opinion
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateOpinion(Request $request)
    {
        $usuario = Usuario::query()->findOrFail($request->id_token);
        $usuario-> opinion = $request->opinion;
        $usuario->save();
    }
    /**
     * Metodo para actualizar los puntos de interes pasandole la ID_TOKEN
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePoi(Request $request)
    {
        $usuario = Usuario::query()->findOrFail($request->id_token);
        $usuario-> poivisited = $request->poivisited;
        $usuario->save();
    }
    /**
     * Metodo para actualizar la localización pasandole la ID_TOKEN
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatelocalizacion(Request $request)
    {
        $usuario = Usuario::query()->findOrFail($request->id_token);
        $usuario-> userlocation = $request->userlocation;
        $usuario->save();
    }







}
