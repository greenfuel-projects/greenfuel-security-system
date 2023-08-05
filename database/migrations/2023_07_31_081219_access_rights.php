<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AccessRights extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_rights', function (Blueprint $table) {
            $table->integer('access_rights_id')->autoIncrement();
            $table->integer('user_type_id'); // what's the user type(who?)
            $table->integer('access_group_id'); // what's the right(do what?)
            $table->boolean('is_grant')->default(0); // does he have the permission?
   
            // foreign keys
            $table->foreign('access_group_id')->references('access_group_id')->on('access_groups')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('user_type_id')->references('user_type_id')->on('user_types')->onUpdate('cascade')->onDelete('restrict');
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
