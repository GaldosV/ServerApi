<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario-> ID_TOKEN =  $request->ID_TOKEN;
        $usuario-> PROCEDENCIA =  $request->PROCEDENCIA;
        $usuario-> IDIOMA =  $request->IDIOMA;
        $usuario-> APP_ID = $request->APP_ID;
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $usuario = Usuario::query()->findOrFail($request->ID_TOKEN);
        $usuario-> ID_TOKEN =  $request->ID_TOKEN;
        $usuario-> PROCEDENCIA =  $request->PROCEDENCIA;
        $usuario-> IDIOMA =  $request->IDIOMA;
        $usuario-> OPINION = $request->OPINION;
        $usuario-> APP_ID = $request->APP_ID;

        $usuario->save();
       // return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $usuario = Usuario::destroy( $request->ID_TOKEN);
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
        $usuarios = DB::table('usuarios')->where('ID_TOKEN',$request->ID_TOKEN)->first();
        return $usuarios;
    }
   // funcion para updatear la opinion
    public function updateOpinion(Request $request)
    {
        $usuario = Usuario::query()->findOrFail($request->ID_TOKEN);
        $usuario-> OPINION = $request->OPINION;
        $usuario->save();
    }
    // funcion pars updatear la poi
    public function updatePoi(Request $request)
    {
        $usuario = Usuario::query()->findOrFail($request->ID_TOKEN);
        $usuario-> POIVISITED = $request->POIVISITED;
        $usuario->save();
    }








}
