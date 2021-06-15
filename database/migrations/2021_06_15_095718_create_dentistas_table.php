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
            $table->string('nombre',30);
            $table->string('apellidos',30);
            $table->date('fechaNacimiento');
            $table->string('genero',1);
            $table->biginteger('telefono');
            $table->string('especialidad',30);
            
            //Domicilio
            $table->integer('noCasa');
            $table->string('calle',25);
            $table->string('colonia',25);
            $table->string('municipio',25);
            $table->string('estado',25);
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
