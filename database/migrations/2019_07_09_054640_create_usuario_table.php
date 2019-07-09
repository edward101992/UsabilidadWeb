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
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('usuario_id');
            $table->string('usuario_nombre');
            $table->string('usuario_apellido');
            $table->string('usuario_email')->unique();
            $table->string('usuario_imagen');
            $table->string('usuario_password');
            $table->boolean('usuario_estado')->default(false);

            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id')->references('rol_id')->on('rol');

            $table->rememberToken();
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
        Schema::dropIfExists('usuario');
    }
}
