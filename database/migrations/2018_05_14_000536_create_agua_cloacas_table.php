<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAguaCloacasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agua_cloacas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('object_state_id')->unsigned();
            $table->foreign('object_state_id')->references('id')->on('object_states')->onDelete('cascade');
            $table->enum('estado',['perdida','sin suministro']);
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
        Schema::dropIfExists('agua_cloacas');
    }
}
