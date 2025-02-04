<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('ID_TICKET');
            $table->unsignedInteger('ID_USER');
            $table->unsignedInteger('ID_ORDER');
            $table->unsignedInteger('ID_MUSEUM');
            $table->dateTime('EXPIRE')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};