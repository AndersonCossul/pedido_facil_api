<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupsTableMigration extends Migration
{
    public function up()
    {
        Schema::create('groups', function(Blueprint $table) {
            $table->string('name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('groups');
    }
}