<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Petugas extends Model
{
    use HasFactory;
    protected $table = "petugas";
    protected $casts = [
        'password' => 'hashed',
    ];

    public function tanggapan()
    {
        $this->hasMany(Tanggapan::class, "id_petugas", "id");
    }
}
