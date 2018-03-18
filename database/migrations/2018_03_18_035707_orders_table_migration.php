<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdersTableMigration extends Migration
{
    public function up()
    {
        Schema::create('orders', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('card_id');
            $table->integer('table_id');
            $table->tinyInteger('print_status');
            $table->double('total_value');
            $table->date('date');
            $table->tinyInteger('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
