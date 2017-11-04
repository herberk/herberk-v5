<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlosasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glosas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',5);
            $table->string('name');
            $table->integer('desglosas_id')->unsigned();
            $table->foreign('desglosas_id')->references('id')->on('desglosas');
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
        Schema::dropIfExists('glosas');
    }
}
