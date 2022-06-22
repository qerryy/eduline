<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapelsTable extends Migration
{

    public function up()
    {
        Schema::create('mapels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mapel_name');
            $table->double('total_price', 8,2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mapels');
    }
}
