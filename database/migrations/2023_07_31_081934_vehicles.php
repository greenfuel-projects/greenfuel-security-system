<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->integer('vehicle_id')->autoIncrement();
            $table->string('reg_plate',10);
            $table->string('color',10);
            $table->integer('department_id');
            $table->boolean('is_visitor')->default(0);
            $table->string('make', 20);
            $table->string('body', 20)->nullable();

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
