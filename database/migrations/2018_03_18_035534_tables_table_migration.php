<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablesTableMigration extends Migration
{
    public function up()
    {
        Schema::create('tables', function(Blueprint $table) {
            $table->string('name');
            $table->tinyInteger('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
