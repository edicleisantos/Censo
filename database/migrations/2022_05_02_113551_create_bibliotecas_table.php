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
        Schema::create('bibliotecas', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
            $table->primary('id');
            $table->string('sigla');
            $table->string('nome');
            $table->integer('tipo');
            $table->integer('numero_assentos');
            $table->integer('emprestimos_domiciliares');
            $table->integer('emprestimos_bibliotecas');
            $table->integer('comutacoes_bibliograficas');
            $table->integer('usuarios_treinados');
            $table->integer('rede_semfio');
            $table->integer('periodicos_impressos');
            $table->integer('livros_impressos');
            $table->integer('outros_materiais');
            $table->string('acessibilidade');
            $table->integer('local_oferta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bibliotecas');
    }
};
