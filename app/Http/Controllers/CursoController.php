<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function listarCurso(){
        $cursos = Curso::all();
        return view('curso', ['cursos'=> $cursos]);
    
    
    }
}
