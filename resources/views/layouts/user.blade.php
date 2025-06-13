<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TeachLink | {{ env('APP_NAME') ?? $title }}</title>

  <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>

  <style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat:500,700,400|Montserrat+Alternates:700");
  </style>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'app-primary': '#0065db',
          },
          fontFamily: {
            'montserrat': ['Montserrat', 'sans-serif'],
            'montserrat-alternates': ['Montserrat Alternates', 'sans-serif'],
          }
        }
      }
    }
  </script>
  @stack('css')
  @vite('resources/css/app.css', 'resources/js/app.js')
  {{-- <link rel="stylesheet" href="/build/assets/app-CG8t1CFx.css">
  <script src="build/assets/app-T1DpEqax.js"></script> --}}
</head>

<body class="font-montserrat">
  <div class="">
    @include('partials.navbar')

    @yield('hero')

    <main class="md:w-9/12 w-11/12 mx-auto">
      @yield('content')
    </main>

    @include('partials.footer')
  </div>



  {{-- Scroll navbar background --}}
  @if (request()->is(
          'mentor-detail',
          'mentor-reservasi',
          'pembayaran',
          'mentor-review',
          'mentor-registrasi',
          'mentor-registrasi-detail'))
    <script>
      const navbar = document.getElementById('navbar');
      navbar.classList.add('text-black', 'bg-white',
        'shadow-md')
    </script>
  @else
    {{-- Scroll navbar background and logo swap --}}
    <script>
      const navbar = document.getElementById('navbar');
      const logo = document.getElementById('logo');

      window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
          navbar.classList.add('bg-white', 'bg-opacity-90', 'shadow-md', 'text-black');
          navbar.classList.remove('text-white');
          logo.src = "{{ asset('assets/img/logo-secondary.png') }}";
        } else {
          navbar.classList.remove('bg-white', 'bg-opacity-90', 'shadow-md', 'text-black');
          navbar.classList.add('text-white');
          logo.src = "{{ asset('assets/img/logo.png') }}";
        }
      });
    </script>
  @endif

  <script>
    // Fungsi untuk update menu navbar berdasarkan session
    function updateNavbarMenu() {
      const authMenu = document.getElementById('authMenu');
      const isLoggedIn = localStorage.getItem('isLoggedIn');

      if (isLoggedIn === 'true') {
        authMenu.innerHTML = `
       <a href="/profile" class="rounded-full w-10 h-10 overflow-hidden flex justify-center items-center">
          <img src="{{ asset('assets/icon/account.svg') }}" alt="Akun" class="w-full h-full object-contain">
      `;
      } else {
        authMenu.innerHTML = `
        <a href="/register" class="px-5 py-2">Daftar</a>
        <a href="/login" class="px-5 py-2 bg-white text-black rounded-lg">Masuk</a>
      `;
      }
    }

    if (localStorage.getItem('isLoggedIn')) {
      updateNavbarMenu()
    }
    // Jalankan saat halaman dimuat
    document.addEventListener('DOMContentLoaded', updateNavbarMenu);
  </script>



  @stack('js')

</body>

</html>
