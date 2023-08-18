<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class TanggapanController extends Controller
{

    public function index()
    {
        return view("dashboard.petugas.tanggapan", [
            "title" => "Tanggapan Saya",
            "tanggapan" => Tanggapan::where("id_petugas", auth()->user()->id)->paginate(5)
        ]);
    }

    public function create(Pengaduan $pengaduan)
    {
        return view("dashboard.petugas.create", [
            "title" => "Tanggapi",
            "pengaduan" => $pengaduan,
            "cekTanggapan" => Tanggapan::where("id_pengaduan", $pengaduan->id)->get()
        ]);
    }

    public function store(Request $request, Pengaduan $pengaduan)
    {
        $validate = $request->validate([
            "waktu_tanggapan" => "required|date",
            "isi_tanggapan" => "required",
        ]);

        $validate["id_pengaduan"] = $pengaduan->id;
        $validate["id_petugas"] = auth()->user()->id;

        Tanggapan::create($validate);
        return redirect("/dashboard/pengaduan")->with('success', "Berhasil di Tanggapi");
    }
}
