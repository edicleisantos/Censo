<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $primaryKey = 'idcpf';
    protected $table = 'alunos';
    public $timestamps = false;

    public function vinculo_inicial(){
        return $this->hasMany(Aluno_Primeiro_Semestre::class,'aluno_idcpf');
    }
    public function vinculo_final(){
        return $this->hasMany(Aluno_Segundo_Semestre::class,'aluno_idcpf');
    }
}
