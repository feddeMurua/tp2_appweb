<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncendiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incendios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entity_id')->unsigned();
            $table->foreign('entity_id')->references('id')->on('entities')->onDelete('cascade');            
            $table->string('objeto_afectado');
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
        Schema::dropIfExists('incendios');
    }
}
