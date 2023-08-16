<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VisitorLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_logs', function (Blueprint $table) {
            $table->integer('visitor_id')->autoIncrement();
            $table->string('visitor_name');
            $table->integer('driver_id');
            $table->foreign('driver_id')->references('driver_id')->on('drivers')->onUpdate('cascade')->onDelete('restrict');
            $table->string('visitor_nat_id', 13)->nullable();
            $table->integer('logger_id');
            $table->foreign('logger_id')->references('user_id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->string('phone', 12);
            $table->string('reason', 100);
            $table->string('card_no', 15)->nullable();
            $table->dateTime('expected_checkout');
            $table->dateTime('actual_checkout');

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
        //
    }
}
