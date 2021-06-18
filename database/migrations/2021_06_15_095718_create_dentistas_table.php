<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDentistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dentistas', function (Blueprint $table) {
            //Datos Generales
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->date('fechaNacimiento');
            $table->string('genero',1);
            $table->biginteger('telefono');
            $table->string('especialidad');
            
            //Domicilio
            $table->integer('noCasa');
            $table->string('calle');
            $table->string('colonia');
            $table->string('municipio');
            $table->string('estado');
            $table->timestamps();

            //$table->blob('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dentistas');
    }
}
