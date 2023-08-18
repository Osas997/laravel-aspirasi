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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 15)->nullable(false)->unique();
            $table->string('nama_lengkap', 100)->nullable(false);
            $table->unsignedBigInteger('id_kelas')->nullable(false);
            $table->string('password', 100)->nullable(false);

            $table->foreign("id_kelas")->references("id")->on("kelas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
