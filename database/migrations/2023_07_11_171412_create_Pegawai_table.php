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
        Schema::create('Pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip');
            $table->integer('posisi_pekerjaan_id')->references('id')->on('PosisiPekerjaan');
            $table->string('kontak');
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pegawai');
    }
};
