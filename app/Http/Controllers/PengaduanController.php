<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.mahasiswa.index", [
            "title" => "Pengaduanku",
            "pengaduan" => Pengaduan::where("id_mahasiswa", auth()->user()->id)->filter(request(["search", "filter"]))->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.mahasiswa.create", [
            "title" => "Buat Pengaduan",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "waktu_pengaduan" => "required|date",
            "isi_laporan" => "required",
            "foto_bukti" => "required|image|file|max:1024"
        ]);

        $validate["foto_bukti"] = $request->file("foto_bukti")->store("foto_pengaduan");
        $validate["id_mahasiswa"] = auth()->user()->id;
        $validate["status"] = 0;

        Pengaduan::create($validate);
        return redirect("/dashboard/pengaduanku")->with('success', "Berhasil di Unggah");
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengaduan $pengaduanku)
    {

        $this->authorize("pengaduan_mahasiswa", $pengaduanku);

        return view('dashboard.mahasiswa.show', [
            "title" => "Detail Pengaduan",
            "pengaduan" =>  $pengaduanku,
            "tanggapan" => Tanggapan::where("id_pengaduan", $pengaduanku->id)->first()
        ]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengaduan $pengaduanku)
    {
        Storage::delete($pengaduanku->foto_bukti);
        // Post::destroy($mypost->id);
        $pengaduanku->delete();
        return redirect("/dashboard/pengaduanku")->with('hapus', "Pengaduan berhasil di hapus");
    }
}
