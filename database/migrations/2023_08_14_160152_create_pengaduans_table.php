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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_mahasiswa")->nullable(false);
            $table->date("waktu_pengaduan")->nullable(false);
            $table->text('isi_laporan')->nullable(false);
            $table->string('foto_bukti')->nullable(false);
            $table->boolean('status')->nullable(false)->default(false);
            $table->timestamps();

            $table->foreign("id_mahasiswa")->on("mahasiswa")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
