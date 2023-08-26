<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class AdminMahasiswaController extends Controller
{
    public function index()
    {
        return view("dashboard.petugas.admin.mahasiswa", [
            "title" => "List Mahasiswa",
            "mahasiswa" => Mahasiswa::search(request("search"))->paginate(5)
        ]);
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect("/dashboard/mahasiswa")->with('hapus', "Mahasiswa berhasil di hapus");
    }
}
