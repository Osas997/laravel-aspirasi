<!-- Navbar -->
<nav
   class="relative flex bg-gray-100 text-slate-500 flex-wrap items-center justify-between px-0 py-2 transition-all shadow-none duration-250 ease-soft-in lg:flex-nowrap lg:justify-start"
   navbar-main navbar-scroll="true">
   <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
      <nav>
         <h6 class="mb-0 text-xl font-bold capitalize">{{ $title }}</h6>
      </nav>

      <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
         <div class="flex items-center md:ml-auto md:pr-4">
            <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
               <span
                  class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                  <i class="fas fa-search"></i>
               </span>
               <input type="text"
                  class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                  placeholder="Type here..." />
            </div>
         </div>
         <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
            <li class="flex items-center">
               <form action="/logout" method="POST">
                  @csrf
                  <button href="/logout" type="submit"
                     class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500">
                     <span class="hidden sm:inline">Logout</span>
                  </button>
               </form>
            </li>
            <li class="flex items-center pl-4 xl:hidden">
               <a class="block p-0 text-sm transition-all cursor-pointer ease-nav-brand text-slate-500"
                  onclick="hamburgerDash()">
                  <div class="w-4.5 overflow-hidden">
                     <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                     <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                     <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  </div>
               </a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<!-- end Navbar -->