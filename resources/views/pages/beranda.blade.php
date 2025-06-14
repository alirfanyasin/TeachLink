@extends('layouts.user')
@section('hero')
  @include('sections.hero-section-home-page')
@endsection
@section('content')
  @include('sections.program-bimbingan')

  @include('sections.tipe-program')
  <section class="my-44">
    <header class="text-center">
      <div class="relative inline-block">
        <h1 class="font-bold text-3xl text-[#0065DB]">Dapatin modul belajar gratis dari mentor!</h1>
        <img src="{{ asset('assets/icon/star-4.svg') }}" alt="" class="absolute -top-5 -right-10">
        <img src="{{ asset('assets/icon/star-4.svg') }}" alt="" class="absolute -top-5 -left-10">
      </div>
      <p class="text-lg mt-4">
        Kamu bisa mendapatkan modul belajar gratis dari para mentor pilihan kamu, <br> buat bantu belajar kamu jadi lebih
        maksimal!
      </p>
    </header>
    <div class="w-full h-[700px]"
      style="background-image: url('{{ asset('assets/img/bg-section.png') }}'); background-size: cover; background-position: top; background-repeat: no-repeat;">
      <div class="flex justify-start items-end h-full pb-18">
        <div class="w-4/12">
          <div class="w-10 mb-5 p-0.5 bg-[#0065DB]"></div>
          <p class="text-lg">Para mentor sudah menyiapkan modul belajar buat kamu, biar kamu bisa lebih aktif belajar dan
            berkembang
            dengan
            cepat!</p>
        </div>
      </div>
    </div>
  </section>

  @include('sections.panduan-pemesanan-mentor')

  @include('sections.mentor-home-page')

  @include('sections.review-mentor-home-page')

  @include('sections.akat')


  <section class="my-40">
    <header class="text-black text-center">
      <h1 class="text-3xl font-bold">Temukan Mentor <br>
        Dikota kamu!</h1>
    </header>


    <div class="grid grid-cols-3 gap-10 mt-10">
      <div class="shadow-xl rounded-xl p-5">
        <h3 class="font-bold text-lg text-[#0065DB]">Gresik</h3>
        <ul>
          <li>Menyanyi</li>
          <li>Bahasa Inggris</li>
          <li>Matematika</li>
          <li>Biola</li>
        </ul>
      </div>
      <div class="shadow-xl rounded-xl p-5">
        <h3 class="font-bold text-lg text-[#0065DB]">Bangkalan</h3>
        <ul>
          <li>Menyanyi</li>
          <li>Bahasa Inggris</li>
          <li>Matematika</li>
          <li>Biologi</li>
        </ul>
      </div>
      <div class="shadow-xl rounded-xl p-5">
        <h3 class="font-bold text-lg text-[#0065DB]">Mojokerto</h3>
        <ul>
          <li>Sepak bola</li>
          <li>Gitar</li>
          <li>Piano</li>
          <li>Sejarah</li>
          <li>Geografi</li>
        </ul>
      </div>
      <div class="shadow-xl rounded-xl p-5">
        <h3 class="font-bold text-lg text-[#0065DB]">Surabaya</h3>
        <ul>
          <li>Menyanyi</li>
          <li>Bahasa Inggris</li>
          <li>Matematika</li>
          <li>Biola</li>
        </ul>
      </div>
      <div class="shadow-xl rounded-xl p-5">
        <h3 class="font-bold text-lg text-[#0065DB]">Lamongan</h3>
        <ul>
          <li>Sepak Bola</li>
          <li>Gitar</li>
          <li>Piano</li>
          <li>Sejarah</li>
          <li>Geografi</li>
        </ul>
      </div>
      <div class="shadow-xl rounded-xl p-5">
        <h3 class="font-bold text-lg text-[#0065DB]">Sidoarjo</h3>
        <ul>
          <li>Menyanyi</li>
          <li>Bahasa Inggris</li>
          <li>Matematika</li>
          <li>Biologi</li>
        </ul>
      </div>
    </div>

  </section>

  @include('sections.banner-pendaftaran')

  @include('sections.kenapa-teachlink')
@endsection
@push('js')
  <script>
    navbar.classList.add('text-white')
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 100) {
        navbar.classList.add('bg-white', 'bg-opacity-90', 'shadow-md', 'text-black');
        navbar.classList.remove('text-white');
      } else {
        navbar.classList.remove('bg-white', 'bg-opacity-90', 'shadow-md', 'text-black');
        navbar.classList.add('text-white');
      }
    });
  </script>
@endpush
