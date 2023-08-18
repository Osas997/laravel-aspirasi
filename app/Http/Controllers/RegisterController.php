<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register.index", [
            "title" => "Register",
            "kelas" => Kelas::all()
        ]);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            "username" => "required|max:20|unique:mahasiswa",
            "nama_lengkap" => 'required',
            "id_kelas" => "required",
            "password" => "required|max:100"
        ]);

        Mahasiswa::create($validation);
        return redirect("/login")->with("berhasil", "Berhasil Register Silahkan Login!!!");
    }
}
