@extends('dashboard.layouts.main')

@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
   <!-- cards row  -->
   <div class="flex flex-wrap mt-6 -mx-3">
      <div class="w-full px-3 mb-6 lg:mb-0 lg:w-1/2 lg:flex-none">
         <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
               <div class="flex flex-wrap">
                  <div class="w-full lg:w-1/2 lg:flex-none">
                     <div class="flex justify-center items-center h-full">
                        <div>
                           <h5 class="font-bold text-center text-2xl">Welcome Back</h5>
                           <p class="text-3xl text-center text-blue-400 font-bold">{{ auth()->user()->nama_lengkap }}
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="max-w-full mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                     <div class="h-full bg-gradient-to-tl from-purple-700 to-pink-500 rounded-xl">
                        <img src="/assets/img/shapes/waves-white.svg"
                           class="absolute top-0 hidden w-1/2 h-full lg:block" alt="waves" />
                        <div class="relative flex items-center justify-center h-full">
                           <img class="relative z-20 w-full pt-6" src="/assets/img/illustrations/rocket-white.png"
                              alt="rocket" />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="flex justify-center w-1/2 items-center">
         @isset(auth()->user()->level)
         @if (auth()->user()->level === "petugas")
         <p class="font-bold text-4xl">Petugas</p>
         @else
         <p class="font-bold text-4xl">Admin</p>
         @endif
         @else
         <p class="font-bold text-4xl">Mahasiswa</p>
         @endisset
      </div>
   </div>
</div>
@endsection