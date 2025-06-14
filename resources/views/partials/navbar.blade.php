<div class="flex justify-center">
  <nav class="w-full fixed z-10 " id="navbar">
    <div class="flex justify-between items-center  mx-auto md:w-9/12 w-11/12  py-3 transition-all duration-500">
      <a href="/"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo TeachLink" id="logo"></a>
      <div>
        <ul class="flex items-center justify-center">
          <li class="px-5 py-3"><a href="/">Beranda</a></li>
          <li class="px-5 py-3"><a href="/tentang-kami">Tentang Kami</a></li>
          <li class="px-5 py-3"><a href="/mentor">Mentor</a></li>
        </ul>
      </div>
      <div id="authMenu">
        <!-- Ini akan berubah menjadi "User" jika sudah login -->
        <a href="/register" class="px-5 py-2">Daftar</a>
        <a href="/login" class="px-5 py-2 bg-white text-black rounded-lg">Masuk</a>
        </a>
      </div>
    </div>
  </nav>
</div>
