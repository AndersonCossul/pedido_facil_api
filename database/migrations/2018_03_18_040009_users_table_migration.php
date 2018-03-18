<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTableMigration extends Migration
{
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->tinyInteger('isAdmin');
            $table->tinyInteger('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
