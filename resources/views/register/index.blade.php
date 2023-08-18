@extends('layouts.login')

@section('content')
<div class="hero min-h-screen pt-10">
   <div class="hero-content w-full flex-col">
      <div class="mb-4">
         <h1 class="text-4xl font-bold">Register Duls</h1>
      </div>
      <div class="card flex-shrink-0 w-1/2 shadow-2xl bg-base-100">
         <div class="card-body">
            <form action="/register" method="POST">
               @csrf
               <div class="form-control">
                  <label for="nim" class="label">
                     <span class="label-text">Nim</span>
                  </label>
                  <input required type="text" id="nim" placeholder="Masukkan NIM" name="username" class="input input-bordered
                  @error('username')input-error @enderror" value="{{ old('username') }}" />
                  @error('username')
                  <p class="text-red-500 text-xs italic p-2">{{ $message }}</p>
                  @enderror
               </div>
               <div class="form-control">
                  <label for="namaLengkap" class="label">
                     <span class="label-text">Nama Lengkap</span>
                  </label>
                  <input required type="text" id="namaLengkap" placeholder="Masukkan Nama Lengkap" name="nama_lengkap"
                     class="input input-bordered @error('nama_lengkap')input-error @enderror"
                     value="{{ old('nama_lengkap') }}" />
                  @error('nama_lengkap')
                  <p class="text-red-500 text-xs italic p-2">{{ $message }}</p>
                  @enderror
               </div>

               <div class="form-control mt-4">
                  <div class="input-group">
                     <select name="id_kelas" class="select w-3/4 select-bordered" required>
                        <option value="">Pilih Kelas</option>
                        @foreach ($kelas as $k)
                        @if (old('id_kelas') == $k->id)
                        <option selected value="{{ $k->id }}">{{ $k->nama }}</option>
                        @else
                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                        @endif
                        @endforeach
                     </select>
                  </div>
               </div>

               <div class="form-control">
                  <label class="label" for="password">
                     <span class="label-text">Password</span>
                  </label>
                  <input required type="password" id="password" name="password" placeholder="password"
                     class="input input-bordered @error('password')input-error @enderror" />
                  @error('password')
                  <p class="text-red-500 text-xs italic p-2">{{ $message }}</p>
                  @enderror
               </div>
               <div class="form-control mt-6">
                  <button class="btn bg-violet-700 hover:bg-violet-800 text-slate-50" type="submit">Login</button>
               </div>
            </form>
            <p class="text-end">Sudah Register ? <a href="/login" class="text-cyan-500">Login</a></p>
         </div>
      </div>
   </div>
</div>
@endsection