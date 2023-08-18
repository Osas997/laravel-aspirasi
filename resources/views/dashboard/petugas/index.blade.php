@extends('dashboard.layouts.main')

@section('content')
<div class="overflow-x-auto py-8">

   <div class="flex justify-center my-4">
      <form action="/dashboard/pengaduan" method="get">
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

   @if ($pengaduan->isNotEmpty())
   <table class="table table-md table-zebra">
      <!-- head -->
      <thead>
         <tr>
            <th></th>
            <th class="text-[1.3em] text-center">Waktu Pengaduan</th>
            <th class="text-[1.3em] text-center">Nama Lengkap</th>
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
            <td class="text-center">{{ $p->mahasiswa->nama_lengkap }}</td>
            <td class="text-center">{{ Str::limit(strip_tags($p->isi_laporan), 15) }}</td>
            <td class="text-center">{{ $p->status === 0 ? "PROSES" : "SELESAI" }}</td>
            <td class="text-center"><a href="/dashboard/pengaduan/{{ $p->id }}"
                  class="badge p-3 hover:bg-indigo-800 badge-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                     height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                     <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                     <path
                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                  </svg></a>
               <a href="/dashboard/tanggapan/{{ $p->id }}" class="badge p-3 hover:bg-indigo-800 badge-primary"><svg
                     xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                     <path
                        d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z" />
                  </svg></a>
               <form action="/dashboard/pengaduan/{{ $p->id }}" method="POST" class="inline">
                  @method("put")
                  @csrf
                  <button onclick="return confirm('Selesai?')" type="submit"
                     class="badge badge-primary p-3 text-black hover:text-white hover:bg-indigo-800"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check2-all" viewBox="0 0 16 16">
                        <path
                           d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
                        <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
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
   <p class="text-center text-red-400 font-bold text-3xl mt-8">Tidak Ada Pengaduan</p>
   @endif
</div>
@endsection