<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KeyLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('key_logs', function (Blueprint $table) {
            $table->integer('key_log_id')->autoIncrement();
            $table->integer('key_id');
            $table->integer('logger_id');
            $table->integer('site_id');
            $table->string('collector', 30);
            $table->string('surrender', 30)->nullable();
            $table->dateTime('surrendered_at')->nullable();
            $table->timestamps();

            // foreign keys
            $table->foreign('key_id')->references('key_id')->on('keys')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('logger_id')->references('user_id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('site_id')->references('site_id')->on('sites')->onUpdate('cascade')->onDelete('restrict');
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
