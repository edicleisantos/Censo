<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinculo_Docente_Curso extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'vinculo_docente_cursos';
    public $timestamps = false;
}
