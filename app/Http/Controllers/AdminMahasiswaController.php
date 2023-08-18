<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class AdminMahasiswaController extends Controller
{
    public function index()
    {
        return view("dashboard.petugas.mahasiswa", [
            "title" => "Mahasiswa",
            "mahasiswa" => Mahasiswa::paginate(5)
        ]);
    }
}
