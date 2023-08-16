<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VehicleMovementLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_movement_logs', function (Blueprint $table) {
            $table->integer('movement_id')->autoIncrement();
            $table->integer('vehicle_id');            
            $table->integer('logger_id');            
            $table->integer('driver_id');            
            $table->integer('site_id');            
            $table->integer('origin_id')->default(1);            
            $table->integer('destination_id')->default(1);            
            $table->integer('said_destination')->nullable();            
            $table->string('reason', 100)->default('');            
            $table->timestamps();

            // foreign keys
            $table->foreign('said_destination')->references('site_id')->on('sites')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('destination_id')->references('site_id')->on('sites')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('site_id')->references('site_id')->on('sites')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('logger_id')->references('user_id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('vehicle_id')->references('vehicle_id')->on('vehicles')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('driver_id')->references('driver_id')->on('drivers')->onUpdate('cascade')->onDelete('restrict');
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
