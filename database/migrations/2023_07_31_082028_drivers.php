<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drivers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->integer('driver_id')->autoIncrement();
            $table->string('driver_name', 70);
            $table->integer('department_id');
            $table->string('driver_nat_id',13)->nullable();
            $table->string('driver_phone',12)->nullable();
            $table->boolean('is_visitor')->default(0);

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
