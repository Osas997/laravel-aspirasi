<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengaduan>
 */
class PengaduanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return
            $data = [
                "waktu_pengaduan" => Date("y-m-d"),
                "foto_bukti" => "foto_pengaduan/ALRJvD3jVOM0Mk8SeLccz9ZBdne77Sm5Nrd3msm9.jpg",
                "isi_laporan" => collect(fake()->paragraphs(rand(5, 10)))->map(fn ($p) => "<p class='mb-4'>$p</p>")->implode(""),
                "id_mahasiswa" => rand(2, 3),
                "status" => 0
            ];
        return $data;
    }
}
