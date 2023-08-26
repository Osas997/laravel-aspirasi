<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.petugas.admin.petugas", [
            "title" => "List Petugas",
            "petugas" => Petugas::search(request("search"))->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.petugas.admin.create_petugas", [
            "title" => "Create Petugas"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            "username" => "required|max:20|unique:petugas",
            "nama_lengkap" => 'required',
            "no_hp" => "required",
            "password" => "required|max:100"
        ]);

        Petugas::create($validation);
        return redirect("/dashboard/petugas")->with("berhasil", "Berhasil Register Petugas!!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petuga)
    {
        dd($petuga);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petugas)
    {
        dd($petugas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petugas $petugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petuga)
    {
        $petuga->delete();
        return redirect("/dashboard/petugas")->with('hapus', "Petugas berhasil di hapus");
    }
}
