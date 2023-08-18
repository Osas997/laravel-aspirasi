<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use App\Models\Pengaduan;
use App\Models\Petugas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // Kelas::create([
        //     "nama" => "1A"
        // ]);

        // Kelas::create([
        //     "nama" => "1B"
        // ]);

        // Kelas::create([
        //     "nama" => "1C"
        // ]);

        // Kelas::create([
        //     "nama" => "1D`"
        // ]);

        // Petugas::create([
        //     "nama" => "Rendi Kopling",
        //     "username" => "rendisempu",
        //     "password" => 12345,
        //     "no_hp" => "0817278282",
        //     "level" => "petugas"
        // ]);

        // Petugas::create([
        //     "nama" => "Fahmi Kopling",
        //     "username" => "fahmigenteng",
        //     "password" => 12345,
        //     "no_hp" => "0817278282",
        //     "level" => "admin"
        // ]);


        Pengaduan::factory(20)->create();

        // Pengaduan::create([
        //     "id_mahasiswa" => 2,
        //     "waktu_pengaduan" => "2022-01-20",
        //     "isi_laporan" => "ads",
        //     "foto_bukti" => "jpg",
        //     "status" => 0
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
