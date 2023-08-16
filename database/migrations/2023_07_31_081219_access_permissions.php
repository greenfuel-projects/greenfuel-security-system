<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AccessPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_permissions', function (Blueprint $table) {
            $table->integer('access_permission_id')->autoIncrement();
            $table->integer('user_type_id'); // what's the user type(who?)
            $table->integer('access_right_id'); // what's the right(do what?)
            $table->boolean('is_grant')->default(0); // does he have the permission?
   
            // foreign keys
            $table->foreign('access_right_id')->references('access_right_id')->on('access_rights')->onUpdate('cascade')->onDelete('restrict');
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
