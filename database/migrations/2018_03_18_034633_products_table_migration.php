<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsTableMigration extends Migration
{
    public function up()
    {
        Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('price');
            $table->integer('stock_quantity')->nullable();
            $table->integer('category_id');
            $table->integer('group_id');
            $table->tinyInteger('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
