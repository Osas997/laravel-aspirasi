<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;


class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";
    protected $guarded = ["id"];
    protected $with = ["kelas"];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class, "id_mahasiswa", "id");
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, "id_kelas", "id");
    }
}
