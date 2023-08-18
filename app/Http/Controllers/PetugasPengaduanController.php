<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class PetugasPengaduanController extends Controller
{
    public function index()
    {
        return view("dashboard.petugas.index", [
            "title" => "Semua Pengaduan",
            "pengaduan" => Pengaduan::filter(request(["search", "filter"]))->paginate(5)
        ]);
    }

    public function show(Pengaduan $pengaduan)
    {
        return view("dashboard.petugas.show", [
            "title" => "Detail Pengaduan",
            "pengaduan" => $pengaduan,
            "tanggapan" => Tanggapan::where("id_pengaduan", $pengaduan->id)->first()
        ]);
    }

    public function update(Pengaduan $pengaduan)
    {
        $pengaduan->update(["status" => 1]);

        return redirect("/dashboard/pengaduan")->with('success', "Berhasil di Update");
    }
}
