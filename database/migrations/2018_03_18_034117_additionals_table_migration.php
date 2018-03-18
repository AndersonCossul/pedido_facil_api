<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdditionalsTableMigration extends Migration
{
    public function up()
    {
        Schema::create('additionals', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('price');
            $table->tinyInteger('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('additionals');
    }
}
