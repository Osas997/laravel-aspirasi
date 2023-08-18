@extends('dashboard.layouts.main')

@section('content')
<div class="overflow-x-auto py-8">

   <div class="flex justify-center my-4">
      <form action="/dashboard/mahasiswa" method="get">
         <div class="join">
            <div>
               <div>
                  <input class="input input-bordered join-item" value="{{ request('search') }}" name="search"
                     placeholder="Search" />
               </div>
            </div>
            <div class="indicator">
               <button type="submit" class="btn join-item">Search</button>
            </div>
         </div>
      </form>
   </div>

   @if (session()->has("hapus"))
   <div class="alert alert-error w-1/4 mb-4 mx-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current text-slate-50 shrink-0 h-6 w-6" fill="none"
         viewBox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span class="text-slate-50 font-bold">{{ session("hapus") }}</span>
   </div>
   @endif

   @if ($mahasiswa->isNotEmpty())
   <table class="table table-md table-zebra">
      <!-- head -->
      <thead>
         <tr>
            <th></th>
            <th class="text-[1.3em] text-center">Nama Lengkap</th>
            <th class="text-[1.3em] text-center">NIM</th>
            <th class="text-[1.3em] text-center">Kelas</th>
            <th class="text-[1.3em] text-center">Aksi</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($mahasiswa as $m)
         <tr>
            <th class="text-center">{{ ($mahasiswa->currentPage() - 1) * $mahasiswa->perPage() + $loop->iteration }}
            </th>
            <td class="text-center">{{ $m->nama_lengkap }}</td>
            <td class="text-center">{{ $m->username }}</td>
            <td class="text-center">{{ $m->kelas->nama }}</td>
            <td class="text-center">
               <form action="/dashboard/mahasiswa/{{ $m->id }}" method="POST" class="inline">
                  @method("delete")
                  @csrf
                  <button onclick="return confirm('Hapus Mahsiswa ?')" type="submit"
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
      {{ $mahasiswa->links() }}
   </div>
   @else
   <p class="text-center text-red-400 font-bold text-3xl mt-8">Tidak Ada Pengaduan</p>
   @endif
</div>
@endsection