<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('idbooking')->unique;
            $table->string('events',30);
            $table->string('namecake')->nullable();
            $table->string('nameoutfit')->nullable();
            $table->string('namevenue')->nullable();
            $table->string('namefood')->nullable();
            $table->string('email',30)->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('booking');
    }
}
