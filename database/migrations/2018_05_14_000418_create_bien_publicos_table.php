<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBienPublicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bien_publicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('object_state_id')->unsigned();
            $table->foreign('object_state_id')->references('id')->on('object_states');
            $table->enum('estado', ['rotura','sin funcionmiento','sustraido']);
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
        Schema::dropIfExists('bien_publicos');
    }
}
