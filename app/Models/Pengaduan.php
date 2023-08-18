<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = "pengaduan";
    protected $guarded = ["id"];
    protected $with = ["mahasiswa"];

    public function scopeFilter($query, array $filter)
    {
        if (isset($filter["search"])) {
            $search = $filter["search"];
            $query->where(fn ($query) =>
            $query->where('isi_laporan', 'like', '%' . $search . '%')
                ->orWhereHas("mahasiswa", fn ($query) => $query->where('nama_lengkap', 'like', '%' . $search . '%')));
        }

        if (isset($filter["filter"])) {
            $filters = $filter["filter"];
            if ($filters === "terbaru") {
                $query->latest();
            } else if ($filters === "selesai") {
                $query->where("status", 1);
            }
        }
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, "id_mahasiswa", "id");
    }
}
