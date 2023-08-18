@extends('dashboard.layouts.main')

@section('content')
<div class="overflow-x-auto py-8">

   @if (session()->has("success"))
   <div class="alert alert-success w-1/4 mb-4 mx-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current text-slate-50 shrink-0 h-6 w-6" fill="none"
         viewBox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span class="text-slate-50 font-bold">{{ session("success") }}</span>
   </div>
   @endif

   @if (session()->has("hapus"))
   <div class="alert alert-error w-1/3 mb-4 mx-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current text-white shrink-0 h-6 w-6" fill="none"
         viewBox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span class="text-slate-50 font-bold">{{ session("hapus") }}</span>
   </div>
   @endif

   <a href="/dashboard/pengaduanku/create" class="btn btn-outline btn-primary ms-4 mb-4">Buat Pengaduan</a>

   <div class="flex justify-center my-4">
      <form action="/dashboard/pengaduanku" method="get">
         <div class="join">
            <div>
               <div>
                  <input class="input input-bordered join-item" value="{{ request('search') }}" name="search"
                     placeholder="Search" />
               </div>
            </div>
            <select class="select select-bordered join-item" name="filter">
               <option disabled selected>Filter</option>
               <option value="terbaru">Terbaru</option>
               <option value="selesai">Selesai</option>
            </select>
            <div class="indicator">
               <button type="submit" class="btn join-item">Search</button>
            </div>
         </div>
      </form>
   </div>
   @if ($pengaduan->isNotEmpty())
   <table class="table table-md table-zebra">
      <!-- head -->
      <thead>
         <tr>
            <th></th>
            <th class="text-[1.3em] text-center">Waktu Pengaduan</th>
            <th class="text-[1.3em] text-center">isi Laporan</th>
            <th class="text-[1.3em] text-center">Status</th>
            <th class="text-[1.3em] text-center">Aksi</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($pengaduan as $p)
         <tr>
            <th class="text-center">{{ ($pengaduan->currentPage() - 1) * $pengaduan->perPage() + $loop->iteration }}
            </th>
            <td class="text-center">{{ $p->waktu_pengaduan }}</td>
            <td class="text-center">{{ Str::limit(strip_tags($p->isi_laporan), 15) }}</td>
            <td class="text-center">{{ $p->status === 0 ? "PROSES" : "SELESAI" }}</td>
            <td class="text-center"><a href="/dashboard/pengaduanku/{{ $p->id }}"
                  class="badge p-3 hover:bg-indigo-800 badge-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                     height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                     <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                     <path
                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                  </svg></a>
               <form action="/dashboard/pengaduanku/{{ $p->id }}" method="POST" class="inline">
                  @method("delete")
                  @csrf
                  <button onclick="return confirm('yakin hapus?')" type="submit"
                     class="badge badge-primary p-3 hover:bg-indigo-800"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path
                           d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                     </svg></button>
               </form>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   <div class="flex justify-center w-2/3 my-8 page">
      {{ $pengaduan->links() }}
   </div>
   @else
   <p class="text-center text-red-400 font-bold text-3xl">Belum Ada Pengaduan</p>
   @endif
</div>
@endsection