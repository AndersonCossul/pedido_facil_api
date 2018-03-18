<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IngredientsTableMigration extends Migration
{
    public function up()
    {
        Schema::create('product_ingredients', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->tinyInteger('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_ingredients');
    }
}
