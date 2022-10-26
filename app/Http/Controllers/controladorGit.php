<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarGit;

class controladorGit extends Controller
{
    public function procesarFormulario(validarGit $req){

        return redirect('/')->with('correcto','incorrecto');

    }

    public function Formulario(){
        return view('formulario');
    }

    public function Tabla(){
        return view('tabla');
    }


}
