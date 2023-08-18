<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
   <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
   <title>{{ $title }}</title>
   @include('dashboard.partials.link')
</head>

<body class="m-0 font-sans min-h-screen text-base antialiased font-normal leading-default bg-gray-200 text-slate-500">
   @include('dashboard.partials.sidebar')
   <main class="ease-soft-in-out xl:ml-68.5 relative h-full bg-white rounded-xl transition-all duration-200">
      @include('dashboard.partials.header')
      @yield('content')
      @include('dashboard.partials.footer')
   </main>
</body>

@include('dashboard.partials.script')

</html>