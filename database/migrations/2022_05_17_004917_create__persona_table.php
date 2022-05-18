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
        //Aqui se crean los campos para la tabla
        Schema::create('_persona', function (Blueprint $table) {
            $table->id();
            $table->string("primernombre");
            $table->string("segundonombre");
            $table->string("primerapellido");
            $table->string("segundoapellido");
            $table->string("cedula");
            $table->date("fechanacimiento");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_persona');
    }
};
