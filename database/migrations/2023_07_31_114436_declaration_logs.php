<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeclarationLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declaration_logs', function (Blueprint $table) {
            $table->integer('declaration_id')->autoIncrement();
            $table->string('key', 15);
            $table->integer('barcode_id')->nullable();
            $table->foreign('barcode_id')->references('barcode_id')->on('barcodes')->onUpdate('cascade')->onDelete('restrict');
            $table->string('serial_number', 10)->nullable();
            $table->integer('logger_id');
            $table->foreign('logger_id')->references('user_id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->dateTime('log_time');
            $table->boolean('is_moving_in');
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
