<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutasController extends Controller
{
    // accion para devolver una vista 

    public function index(){
       return view('frutas.index')
       ->with('frutas', array('naranja', 'pera', 'sandia','fresa', 'melon', 'piña'));
    }

    public function getnaranjas(){
        return 'accion de NARANJAS';
    }

    public function getperas($parametro1, $parametro2){
        return 'accion de PERAS' .$parametro1. ''.$parametro2;
    }

    public function recibirFormulario(request $request){
        $data = $request;

        return 'el nombre de la fruta es: ' .$request->input('nombre');
    }
}
