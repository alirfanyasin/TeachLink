<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TeachLink | {{ env('APP_NAME') ?? $title }}</title>

  <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
  @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body>
  <div class='min-h-screen bg-cover bg-center bg-no-repeat flex items-center justify-center'
    style="background-image: url('{{ asset('assets/img/auth-bg.png') }}')">

    <section class="bg-white shadow-2xl rounded-3xl w-8/12 ">
      <div class="grid grid-cols-2">
        <div class="flex items-center justify-center p-8">
          <img src="{{ asset('assets/img/auth-mascot.png') }}" alt="Mascot" class="w-8/12">
        </div>

        <div class="flex items-center justify-center py-10 px-10">
          @yield('content')
        </div>

      </div>

    </section>

  </div>


  {{-- <script>
    // Fungsi untuk set localStorage saat login
    function setLoginSession() {
      localStorage.setItem('isLoggedIn', 'true');
      window.location.href = '/';
    }
  </script> --}}

</body>

</html>
