<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlazersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blazers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_type');
            $table->string('model_no');
            $table->string('size');
            $table->string('color');
            $table->float('price');
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
        Schema::drop('blazers');
    }
}
