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
        Schema::create('docentes', function (Blueprint $table) {
            $table->bigInteger('idcpf')->unsigned();
            $table->primary('idcpf');
            $table->string('nome');
            $table->string('cpf');
            $table->string('dt_nascimento');
            $table->integer('cor');
            $table->string('pais_origem');
            $table->integer('nacionalidade');
            $table->string('uf_nascimento');
            $table->string('cidade_nascimento');
            $table->integer('escolaridade');
            $table->integer('situacao_docente');
            $table->string('situacao_dezembro');
            $table->string('regime_trabalho');
            $table->string('substituto');
            $table->string('visitante');
            $table->string('atuacao');
            $table->string('pcd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
};
