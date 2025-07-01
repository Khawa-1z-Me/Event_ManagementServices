<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodbeveragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodbeverages', function (Blueprint $table) {
            $table->increments('idfood');
            $table->string('typesfood');
            $table->string('Namefood');
            $table->tinyInteger('participant');
            $table->string('description',150);
            $table->double('prices',4,2);
            $table->timestamps();
            $table->string('email',30);
            $table->foreign('email')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foodbeverages');
    }
}
