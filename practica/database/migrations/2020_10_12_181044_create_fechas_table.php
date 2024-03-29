<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFechasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fechas', function (Blueprint $table) {
            $table->engine=('InnoDB');
            $table->increments('id');
            $table->date('f_ini');
            $table->date('f_fin');
            $table->string('dia1');
            $table->string('dia2');
            $table->string('dia3');
            $table->unsignedInteger('ciclo_id');
            $table->foreign('ciclo_id')->references('id')->on('ciclos');
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
        Schema::dropIfExists('fechas');
    }
}
