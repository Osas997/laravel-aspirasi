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
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_pengaduan")->nullable(false);
            $table->unsignedBigInteger("id_petugas")->nullable(false);
            $table->text('isi_tanggapan')->nullable(false);
            $table->date('waktu_tanggapan')->nullable(false);
            $table->timestamps();

            $table->foreign("id_pengaduan")->on("pengaduan")->references("id");
            $table->foreign("id_petugas")->on("petugas")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanggapan');
    }
};
