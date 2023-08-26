<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Petugas extends Model
{
    use HasFactory;
    protected $table = "petugas";
    protected $guarded = ["id"];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('nama_lengkap', 'like', '%' . $search . '%')
                ->orWhere('username', 'like', '%' . $search . '%');
        }
    }

    public function tanggapan()
    {
        $this->hasMany(Tanggapan::class, "id_petugas", "id");
    }
}
