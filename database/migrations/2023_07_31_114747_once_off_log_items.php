<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OnceOffLogItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('once_off_log_items', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('key', 15);
            $table->integer('declaration_id');
            $table->foreign('declaration_id')->references('declaration_id')->on('declaration_logs')->onUpdate('cascade')->onDelete('restrict');
            $table->json('items');
            $table->integer('logger_id');
            $table->foreign('logger_id')->references('user_id')->on('users')->onUpdate('cascade')->onDelete('restrict');
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
