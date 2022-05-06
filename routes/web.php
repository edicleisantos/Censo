<?php

use App\Http\Controllers\{
    AlunoController,
    BibliotecaController,
    CursoController,
    DocenteController,
    

};
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/docentes', [DocenteController::class, 'listarDocente'])->name('lista.docentes');
Route::get('/alunos',   [AlunoController::class, 'listarAluno'])->name('lista.alunos');
Route::get('/cursos',   [CursoController::class,  'listarCurso'])->name('lista.cursos');
Route::get('/biblioteca',   [BibliotecaController::class,  'listarBiblioteca'])->name('lista.biblioteca');
