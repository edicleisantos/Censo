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
        Schema::create('curso_vaga_ofertada', function (Blueprint $table) {
            $table->integer('codigo_curso')->unsigned();
            $table->primary('codigo_curso');
            $table->foreign('codigo_curso')->references('codigo')->on('cursos')->onDelete('cascade');
            $table->string('turno_manha');
            $table->string('turno_tarde');
            $table->string('turno_noite');
            $table->string('turno_integral');
            $table->string('turno_ead');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso_vaga_ofertada');
    }
};
