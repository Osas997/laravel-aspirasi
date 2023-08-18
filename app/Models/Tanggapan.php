<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $table = "tanggapan";
    protected $guarded = ["id"];
    protected $with = ["pengaduan", "petugas"];


    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, "id_pengaduan", "id");
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, "id_petugas", "id");
    }
}
