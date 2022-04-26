<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function listarDocente(){
        $docentes = Docente::all();
        return view('docente', ['docentes'=> $docentes]);
       
    }
}
