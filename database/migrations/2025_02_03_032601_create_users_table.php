<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('ID_USER');
            $table->string('NAMA_USER', 30);
            $table->string('FOTO_USER', 255)->nullable();
            $table->string('EMAIL', 100)->unique();
            $table->string('PASSWORD', 50);
            $table->string('ROLE', 20)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};