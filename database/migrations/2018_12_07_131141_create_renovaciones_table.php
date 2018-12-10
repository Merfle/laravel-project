<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenovacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renovaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('piso');
            $table->string('pared');
            $table->string('techo');
            $table->string('placard');
            $table->string('ventana');
            $table->string('cortina');
            $table->string('metros cuadrados');
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
        Schema::dropIfExists('renovaciones');
    }
}
