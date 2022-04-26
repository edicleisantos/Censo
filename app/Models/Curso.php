<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $primaryKey = 'codigo';
    public $timestamps = false;
    protected $table = 'cursos';
    

    public function oferta(){
        return $this->hasMany(Curso_Vaga_Ofertada::class, 'codigo_curso');
    }
}
