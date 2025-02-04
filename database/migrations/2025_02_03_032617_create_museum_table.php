<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('museum', function (Blueprint $table) {
            $table->increments('ID_MUSEUM');
            $table->unsignedInteger('ID_USER');
            $table->text('DESKRIPSI_MUSEUM')->nullable();
            $table->string('LOKASI_MUSEUM', 255)->nullable();
            $table->decimal('HARGA_MUSEUM', 10, 0)->nullable();
            $table->string('GAMBAR_PREVIEW', 255)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('museum');
    }
};