<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->increments('ID_KATEGORI');
            $table->string('NAMA_KATEGORI', 100);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kategori');
    }
};