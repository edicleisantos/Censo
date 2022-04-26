<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $primaryKey = 'idcpf';
    protected $table = 'docentes';
    public $timestamps = false;

    public function vinculo(){
        return $this->hasMany(vinculo_docente_curso::class, 'cpf_docente');
    }
}
