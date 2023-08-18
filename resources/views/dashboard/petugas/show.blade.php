@extends('dashboard.layouts.main')

@section('content')
<div class="w-10/12 my-6 ms-8">
   <div class=" w-full mt-6 flex justify-center">
      <img class="w-10/12 rounded-lg" src="{{ asset('storage/'.$pengaduan->foto_bukti) }}" />
   </div>

   <a href="/dashboard/pengaduan"
      class="btn text-white my-4 rounded-lg bg-emerald-400 hover:bg-emerald-600 transition-all" href="">Kembali</a>
   <a href="/dashboard/tanggapan/{{ $pengaduan->id }}"
      class="btn text-white my-4 rounded-lg bg-sky-400 hover:bg-sky-600 transition-all" href="">Tanggapi</a>
   <p class="font-bold text-xl py-2">Nama Mahasiswa : {{ $pengaduan->mahasiswa->nama_lengkap }}</p>
   <p class="font-bold text-xl text-slate-400 py-2">NIM : {{ $pengaduan->mahasiswa->username }}</p>
   <p class="font-bold text-lg text-slate-400">Waktu Pengaduan : {{ $pengaduan->waktu_pengaduan }} / {{
      $pengaduan->created_at->diffForHumans() }}</p>
   <p class="font-bold py-2 text-lg">Status : {{ $pengaduan->status === 0 ? "PROSES" : "SELESAI" }}</p>
   <h3 class="pt-2 text-2xl">Isi Laporan :</h3>
   <div class="py-2 text-lg">{!! $pengaduan->isi_laporan !!}</div>
</div>

<div class="w-10/12 my-2 ms-8">
   <h1 class="text-center text-2xl font-bold">TANGGAPAN</h1>
   @if ($tanggapan)

   <p class="text-lg font-bold">Nama Petugas : {{ $tanggapan->petugas->nama_lengkap }}</p>
   <p class="text-lg font-bold">No HP Petugas : {{ $tanggapan->petugas->no_hp }}</p>
   <p class="text-lg py-2">Isi Tanggapan : {!! $tanggapan->isi_tanggapan !!}</p>
   @else
   <p>Belum Ada Tanggapan</p>
   @endif
</div>


@endsection