<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    public function listarCurso(){
        $cursos = Curso::all();
        return view('curso', ['cursos'=> $cursos]);
    
    
    }
}
