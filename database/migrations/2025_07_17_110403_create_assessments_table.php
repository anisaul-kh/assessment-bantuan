<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penerima_id')->constrained()->onDelete('cascade');

            // Skor Penilaian
            $table->integer('skor_kesehatan')->comment('0-100');
            $table->integer('skor_ekonomi')->comment('0-100');
            $table->integer('skor_tempat_tinggal')->comment('0-100');
            $table->integer('skor_pekerjaan')->nullable()->comment('0-100');
            $table->integer('skor_tanggungan')->nullable()->comment('0-100');

            // Total skor
            $table->integer('total_skor');

            // Status hasil evaluasi
            $table->enum('status_layak', ['Layak', 'Tidak Layak'])->default('Tidak Layak');

            // Keterangan tambahan
            $table->text('keterangan')->nullable();

            // Tanggal penilaian
            $table->date('tanggal_assessment')->default(now());

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
