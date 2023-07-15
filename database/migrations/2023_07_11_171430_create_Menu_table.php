<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Menu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu');
            $table->integer('harga');
            $table->string('kontak');
            $table->integer('kategori_menu_id')->references('id')->on('KategoriMenu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Menu');
    }
};
