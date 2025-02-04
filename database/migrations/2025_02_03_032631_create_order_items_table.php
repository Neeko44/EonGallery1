<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('ID_ORDER');
            $table->unsignedInteger('ID_PEMBAYARAN')->nullable();
            $table->unsignedInteger('ID_TICKET')->nullable();
            $table->date('TANGGAL_ORDER');
            $table->decimal('TOTAL_HARGA', 10, 0);
            $table->string('STATUS', 100);
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};