<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WaitersTableMigration extends Migration
{
    public function up()
    {
        Schema::create('waiters', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('address');
            $table->double('salary');
            $table->double('monthly_commission');
            $table->double('commission_percentage');
            $table->double('monthly_orders_total_value');
            $table->date('admission_date');
            $table->date('demission_date');
            $table->tinyInteger('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('waiters');
    }
}
