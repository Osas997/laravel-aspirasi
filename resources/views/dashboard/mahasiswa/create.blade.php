@extends('dashboard.layouts.main')

@section('content')
<div class="hero-content w-3/4 flex-col">
   <div class="mb-4">
      <h1 class="text-4xl text-center pt-2 font-bold">Buat Pengaduan</h1>
   </div>
   <form action="/dashboard/pengaduanku" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-control mt-4">
         <label class="label" for="laporan">
            <span class="label-text">Isi Laporan</span>
         </label>
         <input type="hidden" id="isi_laporan" name="isi_laporan" value="{{ old('isi_laporan') }}">
         <trix-editor id="laporan" input="isi_laporan"></trix-editor>
         @error('isi_laporan')
         <p class=" text-red-500 text-xs italic p-2">{{ $message }}</p>
         @enderror
      </div>
      <div class="flex justify-between">
         <div class="form-control mt-6">
            <label class="label" for="image">
               <span class="label-text">Foto Bukti</span>
            </label>
            <input name="foto_bukti" type="file" id="image" onchange="previewImage()"
               class="file-input file-input-ghost w-full max-w-xs shadow-lg @error('foto_bukti')input-error @enderror" />
            @error('foto_bukti')
            <p class=" text-red-500 text-xs italic p-2">{{ $message }}</p>
            @enderror
            <div class="w-2/5 rounded-lg mt-4 mx-4">
               <img class="w-full rounded-lg" id="imagePreview" />
            </div>
         </div>

         <div class="form-control flex justify-center w-1/3">
            <label class="label" for="waktu">
               <span class="label-text">Waktu Pengaduan</span>
            </label>
            <input class="input input-bordered @error('waktu_pengaduan')input-error @enderror" id="waktu"
               name="waktu_pengaduan" type="date">
            @error('waktu_pengaduan')
            <p class=" text-red-500 text-xs italic p-2">{{ $message }}</p>
            @enderror
         </div>
      </div>

      <div class="form-control mt-6">
         <button class="btn bg-violet-700 hover:bg-violet-800 text-slate-50" type="submit">Tambah</button>
      </div>
   </form>

</div>
@endsection