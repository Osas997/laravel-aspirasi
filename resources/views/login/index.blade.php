@extends('layouts.login')

@section('content')
<div class="hero min-h-screen">
   <div class="hero-content w-full flex-col">
      <div class="mb-4">

         @if (session()->has("berhasil"))
         <div class="alert alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current text-slate-50 shrink-0 h-6 w-6" fill="none"
               viewBox="0 0 24 24">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-slate-50 font-bold">{{ session("berhasil") }}</span>
         </div>
         @endif

         @if (session()->has("loginError"))
         <div class="alert alert-error">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current text-slate-50 shrink-0 h-6 w-6" fill="none"
               viewBox="0 0 24 24">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-slate-50 font-bold">{{ session("loginError") }}</span>
         </div>
         @endif

         <h1 class="text-4xl text-center pt-2 font-bold">Login Sekarang</h1>
      </div>
      <div class="card flex-shrink-0 w-1/2 shadow-2xl bg-base-100">
         <div class="card-body">
            <form action="/login" method="POST">
               @csrf
               <div class="form-control">
                  <label for="nim" class="label">
                     <span class="label-text">Username</span>
                  </label>
                  <input type="text" id="username" required placeholder="Masukkan Username" name="username"
                     class="input input-bordered @error('username')input-error @enderror"
                     value="{{ old('username') }}" />
                  @error('username')
                  <p class="text-red-500 text-xs italic p-2">{{ $message }}</p>
                  @enderror
               </div>
               <div class="form-control">
                  <label class="label" for="password">
                     <span class="label-text">Password</span>
                  </label>
                  <input type="password" id="password" required name="password" placeholder="Masukkan Password"
                     class="input input-bordered @error('password')input-error @enderror" />
                  @error('password')
                  <p class=" text-red-500 text-xs italic p-2">{{ $message }}</p>
                  @enderror
               </div>
               <div class="form-control mt-6">
                  <button class="btn bg-violet-700 hover:bg-violet-800 text-slate-50" type="submit">Login</button>
               </div>
            </form>
            <p class="text-end">Belum Register ? <a href="/register" class="text-cyan-500">Register</a></p>
         </div>
      </div>
   </div>
</div>

@endsection