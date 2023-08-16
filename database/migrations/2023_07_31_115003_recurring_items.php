<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecurringItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurring_items', function (Blueprint $table) {
            $table->integer('recurring_items_id')->autoIncrement();
            $table->integer('barcode_id');
            $table->foreign('barcode_id')->references('barcode_id')->on('barcodes')->onUpdate('cascade')->onDelete('restrict');
            $table->string('item_name', 50);
            $table->string('owner', 50);
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
