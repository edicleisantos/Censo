<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocenteController extends Controller
{
    public function listarDocente(){
        $docentes = Docente::all();
        return view('docente', ['docentes'=> $docentes]);
       
    }
}
