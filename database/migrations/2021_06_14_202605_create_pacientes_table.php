<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // php artisan migrate
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            //Datos Generales
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->date('fechaNacimiento');
            $table->string('genero',1);
            $table->biginteger('telefono');
            $table->string('email',50);
            
            //$table->blob('foto');

            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // php artisan migrate:rollback
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
