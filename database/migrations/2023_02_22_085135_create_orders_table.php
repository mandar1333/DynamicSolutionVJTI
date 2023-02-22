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
        Schema::create('orders', function (Blueprint $table) {
            $table->id("o_id");
            $table->unsignedBigInteger("u_id");
            $table->foreign('u_id')->references('u_id')->on('users_accounts');
            $table->string('u_address');
            $table->unsignedBigInteger('t_id');
            $table->foreign('t_id')->references('t_id')->on('technicians');
            $table->string('o_amount'); 
            $table->boolean('rapid_service')->default(false);
            $table->date("service_date")->nullable();
            $table->string("time_slote")->nullable();
            $table->string("order_type")->nullable();
            $table->string("order_no");
            $table->timestamp('booking_time')->nullable();
        });
    }


    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
