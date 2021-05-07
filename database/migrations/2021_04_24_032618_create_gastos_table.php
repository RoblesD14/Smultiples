<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos', function (Blueprint $table) {


            $table->id();
            $table->unsignedInteger("gasto1");
            $table->unsignedInteger("gasto2");
            $table->unsignedInteger("gasto3");
            $table->unsignedInteger("gasto4");
            $table->unsignedInteger("gasto5");
            $table->unsignedInteger("gasto6");
            $table->unsignedInteger("gasto7");
            $table->unsignedInteger("gasto8");

        });

        Schema::table('gastos', function (Blueprint $table) {
            $table->unsignedBigInteger("id_empleado");
            $table->foreign("id_empleado")->references("id")->on("empleados")->cascadeOnDelete();

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gastos');
    }
}
