<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function listarAluno(){
        $alunos = Aluno::all();
        return view('aluno', ['alunos'=> $alunos]);
 
        
      }
}
