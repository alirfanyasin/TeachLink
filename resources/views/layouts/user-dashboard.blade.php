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
  @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="font-montserrat bg-[#eaf5ff] ">
  <div class="">
    @include('partials.navbar')

    @yield('hero')

    <main class="md:w-9/12 w-11/12 mx-auto">

      <!-- Main Content -->
      <div class="flex flex-row justify-center w-full min-h-screen">
        <div class="bg-[#eaf5ff] w-full max-w-[1920px] relative flex flex-col">
          <div class="flex px-2 mt-32 gap-3">
            <!-- Left Sidebar -->
            <div class="w-[11%]">
              <div class="flex flex-col items-center gap-[22px] bg-white rounded-2xl py-5">
                <!-- Akun (Active) -->
                <a href="/profile"
                  class="{{ request()->is('profile') ? 'bg-[#4596ff]' : 'bg-[#fbfbfb]' }} flex flex-col items-center justify-center w-20 h-20 border border-solid border-[#ebebeb] rounded-xl  cursor-pointer hover:shadow-lg transition-all">
                  <div class="flex flex-col items-center justify-center w-full">
                    <div class="flex h-10 w-10 p-2 items-center justify-center rounded-md bg-[#aaf9ff]">
                      <img class="object-cover" alt="Akun" src="{{ asset('assets/icon/icon-akun.png') }}" />
                    </div>
                    <div
                      class="font-medium text-xs text-center font-montserrat {{ request()->is('profile') ? 'text-white' : 'text-black' }}">
                      Akun
                    </div>
                  </div>
                </a>

                <!-- Pemesanan -->
                <a href="/pemesanan"
                  class="{{ request()->is('pemesanan') ? 'bg-[#4596ff]' : 'bg-[#fbfbfb]' }} flex flex-col items-center justify-center w-20 h-20 border border-solid border-[#ebebeb] rounded-xl  cursor-pointer hover:shadow-lg transition-all">
                  <div class="flex flex-col items-center justify-center w-full">
                    <div class="flex h-10 w-10 p-2 items-center justify-center rounded-md bg-[#eddbff]">
                      <img class="object-cover" alt="Akun" src="{{ asset('assets/icon/icon-pemesanan.png') }}" />
                    </div>
                    <div
                      class="font-medium text-xs text-center font-montserrat {{ request()->is('pemesanan') ? 'text-white' : 'text-black' }}">
                      Pemesanan
                    </div>
                  </div>
                </a>


                <!-- Kalender -->
                {{-- <div
                  class="flex flex-col items-center justify-center w-20 h-20 border border-solid border-[#ebebeb] rounded-xl bg-[#fbfbfb] cursor-pointer hover:shadow-lg transition-all">
                  <div class="flex flex-col items-center justify-center w-full">
                    <div class="flex h-10 w-10 p-2 items-center justify-center rounded-md bg-[#95c3ff]">
                      <img class="object-cover" alt="Akun" src="{{ asset('assets/icon/icon-calendar.png') }}" />
                    </div>
                    <div class="font-medium text-xs text-center font-montserrat text-black">
                      Kalender
                    </div>
                  </div>
                </div> --}}


                <!-- Pesan -->
                <a href="/chat"
                  class="{{ request()->is('chat') ? 'bg-[#4596ff]' : 'bg-[#fbfbfb]' }} flex flex-col items-center justify-center w-20 h-20 border border-solid border-[#ebebeb] rounded-xl cursor-pointer hover:shadow-lg transition-all">
                  <div class="flex flex-col items-center justify-center w-full">
                    <div class="flex h-10 w-10 p-2 items-center justify-center rounded-md bg-[#00ff2e33]">
                      <img class="object-cover" alt="Akun" src="{{ asset('assets/icon/icon-pesan.png') }}" />
                    </div>
                    <div
                      class="font-medium text-xs text-center font-montserrat {{ request()->is('chat') ? 'text-white' : 'text-black' }}">
                      Pesan
                    </div>
                  </div>
                </a>


                <!-- Separator -->
                <div class="w-14 h-0.5 bg-gray-200 rounded-full"></div>


                <!-- Keluar -->
                <button type="button" onclick="setLogoutSession()"
                  class="flex flex-col items-center justify-center w-20 h-20 border border-solid border-[#ebebeb] rounded-xl bg-[#fbfbfb] cursor-pointer hover:shadow-lg transition-all">
                  <div class="flex flex-col items-center justify-center w-full">
                    <div class="flex h-10 w-10 p-2 items-center justify-center rounded-md bg-[#35353533]">
                      <img class="object-cover" alt="Akun" src="{{ asset('assets/icon/icon-logout.png') }}" />
                    </div>
                    <div class="font-medium text-xs text-center font-montserrat text-black">
                      Keluar
                    </div>
                  </div>
                </button>
              </div>
            </div>


            {{-- Content Section --}}
            @yield('content')


          </div>
        </div>
      </div>
    </main>

    @include('partials.footer')
  </div>


  {{-- Scroll navbar background --}}
  <script>
    const navbar = document.getElementById('navbar');
    navbar.classList.add('text-black', 'bg-white')
  </script>
  <script>
    // Add interactivity
    document.addEventListener('DOMContentLoaded', function() {
      // Save button functionality
      const saveButton = document.getElementById('saveButton');
      saveButton.addEventListener('click', function() {
        alert('Profile information saved successfully!');
      });

      // Sidebar navigation
      const sidebarItems = document.querySelectorAll('.w-\\[11\\%\\] > div > div');
      sidebarItems.forEach(item => {
        item.addEventListener('click', function() {
          // Remove active state from all items
          sidebarItems.forEach(i => {
            i.classList.remove('bg-[#4596ff]');
            i.classList.add('bg-[#fbfbfb]');
            const text = i.querySelector('div:last-child');
            if (text) {
              text.classList.remove('text-white');
              text.classList.add('text-black');
            }
          });

          // Add active state to clicked item (except separator)
          if (!this.classList.contains('bg-gray-200')) {
            this.classList.remove('bg-[#fbfbfb]');
            this.classList.add('bg-[#4596ff]');
            const text = this.querySelector('div:last-child');
            if (text) {
              text.classList.remove('text-black');
              text.classList.add('text-white');
            }
          }
        });
      });

      // Password change button
      const passwordButton = document.querySelector('button[class*="bg-\\[\\#006fff\\]"]');
      if (passwordButton) {
        passwordButton.addEventListener('click', function() {
          alert('Password change functionality would be implemented here.');
        });
      }

      // Profile edit button
      const editButton = document.querySelector('img[alt="Edit profile"]');
      if (editButton) {
        editButton.addEventListener('click', function() {
          alert('Profile photo edit functionality would be implemented here.');
        });
      }
    });
  </script>

  <script>
    // Fungsi untuk set localStorage saat login
    function setLogoutSession() {
      localStorage.setItem('isLoggedIn', 'false');
      window.location.href = '/';
    }
  </script>

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
