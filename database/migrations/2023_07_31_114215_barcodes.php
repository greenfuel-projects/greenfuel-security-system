<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Barcodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barcodes', function (Blueprint $table) {
            $table->integer('barcode_id')->autoIncrement();
            $table->string('barcode', 6);
            $table->integer('access_site_id');
            $table->foreign('access_site_id')->references('site_id')->on('sites')->onUpdate('cascade')->onDelete('restrict');
            $table->dateTime('initial_registration');
            $table->dateTime('expiry_date');
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
