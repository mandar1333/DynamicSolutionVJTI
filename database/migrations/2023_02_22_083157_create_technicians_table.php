<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicians', function (Blueprint $table) {
            $table->id("t_id");
            $table->string("name");
            $table->bigInteger("s_id")->unsigned();
            $table->foreign('s_id')->references('s_id')->on('services');
            $table->string('lat');
            $table->string('lng');
            $table->string('ratting');
            $table->string('contact');
            $table->boolean('verified')->default(true);
            $table->string('t_img');
            $table->string('t_place');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technicians');
    }
};
