<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{

    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {

            $table->id();
            $table->string('nombre');
            $table->text('description');
            $table->unsignedBigInteger('empleado_id');
            $table->timestamps();

            $table->foreign('empleado_id')->references('id')->on('empleados');

        });
    }


    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
