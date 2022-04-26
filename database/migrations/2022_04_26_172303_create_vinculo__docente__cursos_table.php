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
        Schema::create('vinculo__docente__cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('cpf_docente')->unsigned();
            $table->foreign('cpf_docente')->references('idcpf')->on('docentes')->onDelete('cascade');
            $table->integer('codigo_curso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vinculo__docente__cursos');
    }
};
