<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CardsTableMigration extends Migration
{
    public function up()
    {
        Schema::create('cards', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->tinyInteger('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
