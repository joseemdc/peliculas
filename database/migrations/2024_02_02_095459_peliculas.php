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
        Schema::create('peliculas',function(Blueprint $table){
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('categoria_id')->unsigned();
            $table->string('nombre');
            $table->string('descripcion');
            $table->bigInteger('duracion');
            $table->bigInteger('year');
            $table->string('imagen');
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
};
