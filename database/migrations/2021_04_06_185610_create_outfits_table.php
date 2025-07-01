<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutfitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outfits', function (Blueprint $table) {
            $table->increments('idoutfit')->primary;
            $table->string('nameoutfit', 50);
            $table->string('typeofoutfit', 50);
            $table->string('size', 50);
            $table->string('colour', 50);
            $table->double('prices', 4,2);
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
        Schema::dropIfExists('outfits');
    }
}
