@extends('dashboard.layouts.main')

@section('content')
<div class="hero-content w-3/4 flex-col">
   <div class="mb-4">
      <h1 class="text-4xl text-center pt-2 font-bold">Tanggapi Pengaduan</h1>
   </div>

   @if ($cekTanggapan->isNotEmpty())
   <p class="text-center font-bold text-red-400 text-4xl">Sudah Ditanggapi</p>

   @else

   <form action="/dashboard/tanggapan/{{ $pengaduan->id }}" method="POST">
      <div class="w-full border border border-slate-400 p-8">
         <p class="font-bold text-xl">Nama Mahasiswa : {{ $pengaduan->mahasiswa->nama_lengkap }}</p>
         <p class="font-bold text-xl">NIM : {{ $pengaduan->mahasiswa->username }}</p>
         <p class="font-bold text-lg py-2">Isi Laporan : </p>
         <p class="py-2">{!! $pengaduan->isi_laporan !!}</p>
      </div>
      @csrf
      <div class="form-control mt-4">
         <label class="label" for="tanggapan">
            <span class="label-text">Isi Tanggapan</span>
         </label>
         <input type="hidden" id="isi_tanggapan" name="isi_tanggapan" value="{{ old('isi_tanggapan') }}">
         <trix-editor id="tanggapan" input="isi_tanggapan"></trix-editor>
         @error('isi_tanggapan')
         <p class=" text-red-500 text-xs italic p-2">{{ $message }}</p>
         @enderror
      </div>

      <div class="form-control flex justify-center w-1/3">
         <label class="label" for="waktu">
            <span class="label-text">Waktu Tanggapan</span>
         </label>
         <input class="input input-bordered @error('waktu_tanggapan')input-error @enderror" id="waktu"
            name="waktu_tanggapan" type="date">
         @error('waktu_tanggapan')
         <p class=" text-red-500 text-xs italic p-2">{{ $message }}</p>
         @enderror
      </div>

      <div class="form-control mt-6">
         <button class="btn bg-violet-700 hover:bg-violet-800 text-slate-50" type="submit">Tambah</button>
      </div>
   </form>

   @endif

</div>
@endsection