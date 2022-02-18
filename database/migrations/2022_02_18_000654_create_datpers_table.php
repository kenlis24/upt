<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatpersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datpers', function (Blueprint $table) {
            $table->id();

            $table->string('nac');
            $table->string('cedula');
            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->date('fechnac');
            $table->string('sexo');
            $table->double('estatura');
            $table->double('peso');
            $table->string('edocivil');
            $table->string('email');
            $table->string('celular');
            $table->string('telfcasa');
            $table->string('direc');
            
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
        Schema::dropIfExists('datpers');
    }
}
