<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario_nombre');
            $table->string('usuario_apellido');
            $table->string('email')->unique();
            $table->string('usuario_telefono');
            $table->string('usuario_imagen')->default("ruta/imagen");
            $table->string('password');
            $table->boolean('usuario_estado')->default(false);
            $table->rememberToken();
            $table->timestamps();      
            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id')->references('rol_id')->on('rol');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
