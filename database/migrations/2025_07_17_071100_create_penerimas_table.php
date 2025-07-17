<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penerimas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nik', 16)->unique();
            $table->string('alamat_lengkap');
            $table->string('no_hp')->nullable();
            $table->string('jenis_kelamin'); // Laki-laki / Perempuan
            $table->string('kategori_bantuan'); // PKH, Sembako, BLT, dll
            $table->date('tanggal_lahir');
            $table->string('status_ekonomi'); // Miskin, Rentan Miskin, Tidak Mampu
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penerimas');
    }
};
