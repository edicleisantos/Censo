<?php

namespace App\Http\Controllers;

use App\Models\Biblioteca;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function listarBiblioteca(){
       
        $biblioteca = Biblioteca::all();
        return view('biblioteca', ['bibliotecas'=> $biblioteca]);
 
        
      }
}
