<?php

use App\Http\Controllers\{
    AlunoController,
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
