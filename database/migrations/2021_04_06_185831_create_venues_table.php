<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {

            $table->increments('idvenue')->primary;
            $table->string('Typevenue');
            $table->string('namevenue');
            $table->string('address');
            $table->string('description');
            $table->double('prices',4,2);
            $table->string('time');
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
        Schema::dropIfExists('venues');
    }
}
