<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_primeiro_semestre', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricula');
            $table->bigInteger('aluno_idcpf')->unsigned();
            $table->foreign('aluno_idcpf')->references('idcpf')->on('alunos')->onDelete('cascade');
            $table->integer('curso');           
            $table->integer('turno');
            $table->integer('situacao');
            $table->string('parfor');
            $table->string('segunda_licenciatura');
            $table->string('ingresso');
            $table->string('forma_ingresso');
            $table->string('mobilidade');
            $table->string('reserva_vaga');
            $table->string('apoio_social');
            $table->string('atividade_extra');
            $table->integer('integralizacao');
            $table->integer('ch_curso');
            $table->string('justificativa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_primeiro_semestre');
    }
};
