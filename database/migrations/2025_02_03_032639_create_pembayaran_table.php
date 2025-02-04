<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->increments('ID_PEMBAYARAN');
            $table->unsignedInteger('ID_ORDER');
            $table->string('JENIS_PEMBAYARAN', 255);
            $table->dateTime('TANGGAL_PEMBAYARAN');
            $table->decimal('TOTAL_PEMBAYARAN', 10, 0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
};