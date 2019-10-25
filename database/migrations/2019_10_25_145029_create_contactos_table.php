<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('apellido');
            $table->string('nombre');
            $table->integer('dni');
            $table->string('nacimiento');
            $table->string('genero');
            $table->string('estado_civil');
            $table->string('provincia')->default('Chaco');
            $table->string('localidad');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->text('foto')->nullable();

            $table->string('grupo')->nullable();

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
        Schema::dropIfExists('contactos');
    }
}
