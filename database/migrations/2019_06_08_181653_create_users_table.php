<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('gender');

            $table->unsignedInteger('mapel_id')->nullable();
            $table->foreign('mapel_id')->references('id')->on('mapels')->onDelete('cascade');
            
            $table->string('username');
            $table->string('email')->unique();
            $table->boolean('admin')->default('0');    
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
