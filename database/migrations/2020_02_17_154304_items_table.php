<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('sys_id');//for now
            $table->string('emp_name');
            $table->bigInteger('quantity');            
            $table->float('cost');
            $table->string('name');
            $table->string('digital_id');
            $table->string('type');
            $table->binary('disability_photo');
            $table->binary('disability_audio');
            $table->rememberToken();
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
        Schema::dropIfExists('items');
    }
}
