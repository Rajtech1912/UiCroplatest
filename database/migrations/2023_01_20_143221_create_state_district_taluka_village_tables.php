<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state_name');
            $table->timestamps();
        });
        Schema::create('districts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('district_name');
            $table->integer('district_id');            
            $table->timestamps();
        });
        Schema::create('talukas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('taluka_name');
            $table->integer('taluka_id');            
            $table->timestamps();
        });
        Schema::create('villages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('village_name');
            $table->integer('village_id');            
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
        Schema::drop('states');
       Schema::drop('districts');
       Schema::drop('talukas');
       Schema::drop('villages');
    }
};
