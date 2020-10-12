<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tut_docs', function (Blueprint $table) {
            $table->engine=('InnoDB');
            $table->increments('id');
            $table->foreign('ciclo_id')->references('id')->on('ciclos');
            $table->string('nombre');
            $table->string('apellidos');
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
        Schema::dropIfExists('tut_docs');
    }
}
