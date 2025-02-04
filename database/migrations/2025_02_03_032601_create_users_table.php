<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('ID_USER');
            $table->unsignedInteger('ID_MUSEUM')->nullable();
            $table->string('NAMA_USER', 30);
            $table->string('FOTO_USER', 255)->nullable();
            $table->string('EMAIL', 100)->unique();
            $table->string('PASSWORD', 255);
            $table->string('ROLE', 20)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user');
    }
};
