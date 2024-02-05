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
        Schema::create('discos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->bigInteger('genero_id')->unsigned();
            $table->bigInteger('formato_id')->unsigned();
            $table->string('nombre');
            $table->string('artista');
            $table->string('album');
            $table->string('year');
            $table->timestamps();
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade');
            $table->foreign('formato_id')->references('id')->on('formatos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discos');
    }
};
