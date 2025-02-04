<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Foreign key untuk tabel users
        Schema::table('user', function (Blueprint $table) {
            $table->foreign('ID_MUSEUM')->references('ID_MUSEUM')->on('museum');
        });

        // Foreign key untuk tabel artworks
        Schema::table('artworks', function (Blueprint $table) {
            $table->foreign('ID_KATEGORI')->references('ID_KATEGORI')->on('kategori');
            $table->foreign('ID_MUSEUM')->references('ID_MUSEUM')->on('museum');
        });

        // Foreign key untuk tabel order_items
        Schema::table('order_items', function (Blueprint $table) {
            $table->foreign('ID_PEMBAYARAN')->references('ID_PEMBAYARAN')->on('pembayaran');
            $table->foreign('ID_TICKET')->references('ID_TICKET')->on('tickets');
        });

        // Foreign key untuk tabel pembayaran
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->foreign('ID_ORDER')->references('ID_ORDER')->on('order_items');
        });

        // Foreign key untuk tabel tickets
        Schema::table('tickets', function (Blueprint $table) {
            $table->foreign('ID_USER')->references('ID_USER')->on('user');
            $table->foreign('ID_ORDER')->references('ID_ORDER')->on('order_items');
            $table->foreign('ID_MUSEUM')->references('ID_MUSEUM')->on('museum');
        });

    }

    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropForeign(['ID_MUSEUM']);
        });

        Schema::table('artworks', function (Blueprint $table) {
            $table->dropForeign(['ID_KATEGORI']);
            $table->dropForeign(['ID_MUSEUM']);
        });

        Schema::table('order_items', function (Blueprint $table) {
            $table->dropForeign(['ID_PEMBAYARAN']);
            $table->dropForeign(['ID_TICKET']);
        });

        Schema::table('pembayaran', function (Blueprint $table) {
            $table->dropForeign(['ID_ORDER']);
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign(['ID_USER']);
            $table->dropForeign(['ID_ORDER']);
            $table->dropForeign(['ID_MUSEUM']);
        });

    }
};
