<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Keys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keys', function (Blueprint $table) {
            $table->integer('key_id')->autoIncrement();
            $table->string('key_name', 30);
            $table->integer('department_id');
            $table->string('barcode', 10);
            $table->string('alias', 5)->nullable();

            // foreign keys
            $table->foreign('department_id')->references('department_id')->on('departments')->onUpdate('cascade')->onDelete('restrict');
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
