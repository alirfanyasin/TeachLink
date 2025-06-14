@extends('layouts.user')
@section('hero')
  <section id="hero-section" class="relative">
    <div class="jumbotron h-screen w-full"
      style="background-image: url('{{ asset('assets/img/hero-banner-2.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">

      <div class="flex h-full justify-center">
        <h1 class="text-center text-white font-bold text-4xl mt-28">Yuk! <br>
          Cari Mentor Yang Sempurna <br>
          Untuk Kamu</h1>
      </div>

    </div>

    <div class="flex justify-center">
      <div
        class="countdown px-10 py-5 bg-white/70 backdrop-blur-lg shadow-xl rounded-2xl text-black mx-auto flex justify-between w-8/12 absolute -bottom-14">
        <div class="text-center">
          <h3 class="font-bold text-6xl count" data-target="20">0</h3>
          <p class="">Bidang</p>
        </div>
        <div class="text-center">
          <h3 class="font-bold text-6xl count" data-target="82">0</h3>
          <p class="">Mentor</p>
        </div>
        <div class="text-center">
          <h3 class="font-bold text-6xl count" data-target="200" data-plus="true">0</h3>
          <p class="">Sesi</p>
        </div>
        <div class="text-center">
          <h3 class="font-bold text-6xl count" data-target="150" data-plus="true">0</h3>
          <p class="">Peserta</p>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('content')
  <section class="mt-40 mb-20">
    <header class="text-center">
      <h1 class="text-3xl font-bold text-blue-500">Pilih Bidang Yang Kamu Suka!</h1>
      <p class="text-lg text-black">#Nikmati suasana pembelajaran dengan cara yang baru bersama Tech-mentor </p>
    </header>
  </section>

  <section>

    <header class="mb-10">
      <div class="flex space-x-3">

        <div class="flex items-center space-x-1 border-2 border-gray-300 w-64 px-2 rounded-lg">
          <img src="{{ asset('assets/icon/bidang.svg') }}" alt="">
          <select name="" id="" class=" text-lg p-3 focus:outline-0 w-full">
            <option value="Matematika">Matematika</option>
            <option value="Bahasa Inggris">Bahasa Inggris</option>
            <option value="Bahasa Mandarin">Bahasa Mandarin</option>
            <option value="Menggambar">Menggambar</option>
          </select>
        </div>

        <div class="flex items-center space-x-1 border-2 border-gray-300 w-64 px-2 rounded-lg">
          <img src="{{ asset('assets/icon/location.svg') }}" alt="">
          <select name="" id="" class=" text-lg p-3 focus:outline-0 w-full">
            <option value="Surabaya">Surabaya</option>
            <option value="Malang">Malang</option>
            <option value="Jakarta">Jakarta</option>
            <option value="Yogyakarta">Yogyakarta</option>
          </select>
        </div>

      </div>

    </header>


    <div class="grid grid-cols-3 gap-4">
      <a href="/mentor-detail" class="bg-white block shadow-xl rounded-2xl overflow-hidden group cursor-pointer">
        <div class="overflow-hidden">
          <img src="{{ asset('assets/img/card-mentor/01.png') }}"
            class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110" alt="">
        </div>
        <div class="p-8 mt-3">
          <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Kevin Merco</h4>
          <p class="flex items-center"><img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt="">
            5 (50 ulasan)</p>
          <p class="font-light text-lg my-2">Surabaya - Tatap muka & Online</p>
          <p class="font-bold text-xl text-black mb-2">Bahasa inggris</p>
          <p class="font-light text-xl">ENG-ID. Kids Friendly | Bilingual Digital Arts & Comic Expert | 15+ Years
            Experience....</p>
          <p class="text-[#0065DB] font-semibold text-xl mt-4">Rp 100,000/jam</p>
        </div>
      </a>

      <div class="bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer">
        <div class="overflow-hidden">
          <img src="{{ asset('assets/img/card-mentor/02.png') }}"
            class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110" alt="">
        </div>
        <div class="p-8 mt-3">
          <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Maudia Tamara</h4>
          <p class="flex items-center"><img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt="">
            5 (50 ulasan)</p>
          <p class="font-light text-lg my-2">Surabaya - Online</p>
          <p class="font-bold text-xl text-black mb-2">Bahasa Prancis</p>
          <p class="font-light text-xl">Lulusan Sastra Prancis dengan memiliki DELF B1 menawarkan kursus bahasa
            Perancis....</p>
          <p class="text-[#0065DB] font-semibold text-xl mt-4">Rp 100,000/jam</p>
        </div>
      </div>

      <div class="bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer">
        <div class="overflow-hidden">
          <img src="{{ asset('assets/img/mentor/16.png') }}"
            class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110" alt="">
        </div>
        <div class="p-8 mt-3">
          <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Aditya Pratama</h4>
          <p class="flex items-center"><img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt="">
            5 (50 ulasan)</p>
          <p class="font-light text-lg my-2">Surabaya - Tatap muka & Online</p>
          <p class="font-bold text-xl text-black mb-2">Menggambar</p>
          <p class="font-light text-xl">Belajar menggambar hampir apa saja dalam waktu singkat! Kembangkan...</p>
          <p class="text-[#0065DB] font-semibold text-xl mt-4">Rp 100,000/jam</p>
        </div>
      </div>
      <div class="bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer">
        <div class="overflow-hidden">
          <img src="{{ asset('assets/img/mentor/17.png') }}"
            class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110" alt="">
        </div>
        <div class="p-8 mt-3">
          <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Rendi</h4>
          <p class="flex items-center"><img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt="">
            5 (50 ulasan)</p>
          <p class="font-light text-lg my-2">Surabaya - Tatap muka & Online</p>
          <p class="font-bold text-xl text-black mb-2">Matematika</p>
          <p class="font-light text-xl">Lulusan S2 Statistika ITS yang pernah juara kompetisi serta memiliki
            pengalaman...</p>
          <p class="text-[#0065DB] font-semibold text-xl mt-4">Rp 100,000/jam</p>
        </div>
      </div>

      <div class="bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer">
        <div class="overflow-hidden">
          <img src="{{ asset('assets/img/mentor/18.png') }}"
            class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110" alt="">
        </div>
        <div class="p-8 mt-3">
          <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Aldy</h4>
          <p class="flex items-center"><img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt="">
            5 (50 ulasan)</p>
          <p class="font-light text-lg my-2">Surabaya - Online</p>
          <p class="font-bold text-xl text-black mb-2">Bahasa Prancis</p>
          <p class="font-light text-xl">Lulusan Sastra Prancis dengan memiliki DELF B1 menawarkan kursus bahasa
            Perancis....</p>
          <p class="text-[#0065DB] font-semibold text-xl mt-4">Rp 100,000/jam</p>
        </div>
      </div>

      <div class="bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer">
        <div class="overflow-hidden">
          <img src="{{ asset('assets/img/mentor/19.png') }}"
            class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110" alt="">
        </div>
        <div class="p-8 mt-3">
          <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Fauzan</h4>
          <p class="flex items-center"><img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt="">
            5 (50 ulasan)</p>
          <p class="font-light text-lg my-2">Surabaya - Tatap muka & Online</p>
          <p class="font-bold text-xl text-black mb-2">Fisika</p>
          <p class="font-light text-xl">Alumni Teknik Fisika UGM berpengalaman 8 tahun mengajar dan menaklukkan Fisika
            dan...</p>
          <p class="text-[#0065DB] font-semibold text-xl mt-4">Rp 100,000/jam</p>
        </div>
      </div>



      <div class="bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer">
        <div class="overflow-hidden">
          <img src="{{ asset('assets/img/mentor/21.png') }}"
            class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110" alt="">
        </div>
        <div class="p-8 mt-3">
          <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Oswaldo</h4>
          <p class="flex items-center"><img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt="">
            5 (50 ulasan)</p>
          <p class="font-light text-lg my-2">Surabaya - Tatap muka & Online</p>
          <p class="font-bold text-xl text-black mb-2">Gitar</p>
          <p class="font-light text-xl">Mengajar teknik dasar bermain gitar, kunci dasar, kepekaan terhadap tempo / nada,
            dll khusus..</p>
          <p class="text-[#0065DB] font-semibold text-xl mt-4">Rp 100,000/jam</p>
        </div>
      </div>

      <div class="bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer">
        <div class="overflow-hidden">
          <img src="{{ asset('assets/img/mentor/22.png') }}"
            class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110" alt="">
        </div>
        <div class="p-8 mt-3">
          <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Yusuf Handoko</h4>
          <p class="flex items-center"><img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt="">
            5 (50 ulasan)</p>
          <p class="font-light text-lg my-2">Surabaya - Online</p>
          <p class="font-bold text-xl text-black mb-2">Badminton</p>
          <p class="font-light text-xl">Pelatih badminton untuk level basic hingga profesional, lulusan/alumni atlet
            binaan PB DJARUM...</p>
          <p class="text-[#0065DB] font-semibold text-xl mt-4">Rp 100,000/jam</p>
        </div>
      </div>

      <div class="bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer">
        <div class="overflow-hidden">
          <img src="{{ asset('assets/img/mentor/23.png') }}"
            class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110" alt="">
        </div>
        <div class="p-8 mt-3">
          <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Samuel</h4>
          <p class="flex items-center"><img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt="">
            5 (50 ulasan)</p>
          <p class="font-light text-lg my-2">Surabaya - Tatap Muka</p>
          <p class="font-bold text-xl text-black mb-2">Berenang</p>
          <p class="font-light text-xl">Les renang terbaik, Ingin memiliki skill renang yang baik dan berprestasi,
            belajar renang...</p>
          <p class="text-[#0065DB] font-semibold text-xl mt-4">Rp 100,000/jam</p>
        </div>
      </div>
    </div>
  </section>



  <section class="my-40">
    <header class="mb-10">
      <h1 class="text-3xl text-black font-bold">Belajar tidak pernah semudah ini!</h1>
    </header>

    <div class="grid grid-cols-3 gap-5">
      <div class="text-center">
        <img src="{{ asset('assets/icon/search.png') }}" alt="" class="w-full mb-8">
        <h3 class="text-2xl font-bold text-black mb-2">Temukan guru Anda</h3>
        <p class="text-lg font-light">Cek profil para guru kami dan pilih guru yang paling sesuai dengan preferensi Anda
          (tarif,
          metode pengajaran,
          pengalaman, lokasi, ketersediaan mengajar online, dll)</p>
      </div>

      <div class="text-center">
        <img src="{{ asset('assets/icon/chatting.png') }}" alt="" class="w-full mb-8">
        <h3 class="text-2xl font-bold text-black mb-2">Atur sendiri kursus Anda</h3>
        <p class="text-lg font-light">Ceritakan kepada guru Anda tentang kebutuhan dan tujuan Anda mengambil kursus.
          Jelaskan juga
          kapan jadwal kosong Anda. Atur sendiri kursus Anda sesuai dengan kesepakatan antara Anda dan guru Anda.</p>
      </div>

      <div class="text-center">
        <img src="{{ asset('assets/icon/date.png') }}" alt="" class="w-full mb-8">
        <h3 class="text-2xl font-bold text-black mb-2">Mulai lah pengalaman baru dengan belajar hal baru</h3>
        <p class="text-lg font-light">Cek profil para guru kami dan pilih guru yang paling sesuai dengan preferensi Anda
          (tarif,
          metode pengajaran, pengalaman, lokasi, ketersediaan mengajar online, dll)</p>
      </div>
    </div>
  </section>

  @include('sections.panduan-pemesanan-mentor')


  <section class="my-40">

    <div>
      <div class="bg-no-repeat bg-contain bg-center w-full h-[600px] relative"
        style="background-image: url('{{ asset('assets/img/bg-our-solution.png') }}');">

        <div class="">
          <header>
            <h2 class="uppercase text-blue-700 text-3xl">TECH MENTOR</h2>
            <div class="bg-blue-700 w-20 h-0.5 mt-3"></div>
            <h1 class="text-black font-bold text-4xl my-5">Anda juga bisa, <br>
              menjadi guru yang hebat</h1>
            <p class="text-xl">Bergabunglah bersama kami dan <br>jadikan perjalanan mengajar Anda <br> menjadi lebih baik
            </p>
          </header>

          <div class="absolute bottom-14 left-10">
            <h4 class="text-white text-lg">Yuk! Daftarkan diri kamu dan <br> jadilah Top-mentor favorite <br>
              Tech-verse selanjutnya!</h4>

            <a href="" class="mt-5 inline-block  text-black">
              <div class="flex justify-center items-center bg-white rounded-full px-2 py-1">
                <span class="font-semibold text-lg mx-4">Bergabung sebagai mentor</span>
                <div class="bg-[#0052B4] text-white w-10 h-10 rounded-full flex justify-center items-center">
                  <iconify-icon icon="si:arrow-right-line" width="30"></iconify-icon>
                </div>
              </div>
            </a>
          </div>
        </div>


        <div
          class="bg-white/30 animate-bounce backdrop-blur-2xl rounded-xl flex justify-center absolute right-0 py-12 bottom-28 w-50 border-2 border-gray-200">
          <div>
            <img src="{{ asset('assets/icon/tech-mentor.svg') }}" class="mx-auto w-20 mb-5" alt="">
            <h3 class="uppercase text-xl font-semibold">Tech Mentor</h3>
          </div>
        </div>

      </div>
    </div>
  </section>





  <section>
    <div class="flex justify-between items-center gap-4">
      <div class="flex-1">
        <h2 class="text-black font-bold text-3xl mb-7">Pertanyaan yang sering diajukan</h2>
        <div class="bg-white shadow-2xl rounded-2xl px-6 py-2">
          <div class="border-b border-gray-300 bg-white py-2 max-w-xl mx-auto">
            <button id="accordion-btn"
              class="accordion-button text-left w-full flex justify-between items-center focus:outline-none">
              <h2 class="text-lg font-light">Berapa tarif rata-rata mentor/guru?</h2>
              <span class="text-blue-600 transition-transform duration-300" id="accordion-icon">
                <iconify-icon icon="iconamoon:arrow-down-2" width="20"></iconify-icon>
              </span>
            </button>
            <div id="accordion-content"
              class="overflow-hidden max-h-0 transition-[max-height] duration-500 ease-in-out px-0">
              <div class="mt-2 p-4 bg-[#3771C8]/10 rounded-lg">
                <p class="font-light">Tarif rata-rata mentor di Teachlink adalah sekitar:</p>
                <p class="font-bold text-blue-600">Rp 80,000/jam - Rp 150,000/jam</p>
                <p class="font-light">Tarif masing-masing mentor akan bergantung pada:</p>
                <ul class="list-disc list-inside text-blue-600 font-bold">
                  <li>pengalaman mengajar dari guru matematika</li>
                  <li>lokasi kursus (online atau langsung) dan jarak yang ditempuh untuk ke tempat mengajar</li>
                  <li>durasi dan frekuensi kursus</li>
                </ul>
                <p>97% Mentor kami menawarkan <span class="font-bold text-blue-600">kursus gratis</span> untuk 1 jam
                  pertama</p>
              </div>
            </div>
          </div>
          <div class="border-b border-gray-300 bg-white py-2 max-w-xl mx-auto">
            <button id="accordion-btn"
              class="accordion-button text-left w-full flex justify-between items-center focus:outline-none">
              <h2 class="text-lg font-light">Berapa tarif rata-rata mentor/guru?</h2>
              <span class="text-blue-600 transition-transform duration-300" id="accordion-icon">
                <iconify-icon icon="iconamoon:arrow-down-2" width="20"></iconify-icon>
              </span>
            </button>
            <div id="accordion-content"
              class="overflow-hidden max-h-0 transition-[max-height] duration-500 ease-in-out px-0">
              <div class="mt-2 p-4 bg-[#3771C8]/10 rounded-lg">
                <p class="font-light">Tarif rata-rata mentor di Teachlink adalah sekitar:</p>
                <p class="font-bold text-blue-600">Rp 80,000/jam - Rp 150,000/jam</p>
                <p class="font-light">Tarif masing-masing mentor akan bergantung pada:</p>
                <ul class="list-disc list-inside text-blue-600 font-bold">
                  <li>pengalaman mengajar dari guru matematika</li>
                  <li>lokasi kursus (online atau langsung) dan jarak yang ditempuh untuk ke tempat mengajar</li>
                  <li>durasi dan frekuensi kursus</li>
                </ul>
                <p>97% Mentor kami menawarkan <span class="font-bold text-blue-600">kursus gratis</span> untuk 1 jam
                  pertama</p>
              </div>
            </div>
          </div>


          <div class="border-b border-gray-300 bg-white py-2 max-w-xl mx-auto">
            <button id="accordion-btn"
              class="accordion-button text-left w-full flex justify-between items-center focus:outline-none">
              <h2 class="text-lg font-light">Berapa tarif rata-rata mentor/guru?</h2>
              <span class="text-blue-600 transition-transform duration-300" id="accordion-icon">
                <iconify-icon icon="iconamoon:arrow-down-2" width="20"></iconify-icon>
              </span>
            </button>
            <div id="accordion-content"
              class="overflow-hidden max-h-0 transition-[max-height] duration-500 ease-in-out px-0">
              <div class="mt-2 p-4 bg-[#3771C8]/10 rounded-lg">
                <p class="font-light">Tarif rata-rata mentor di Teachlink adalah sekitar:</p>
                <p class="font-bold text-blue-600">Rp 80,000/jam - Rp 150,000/jam</p>
                <p class="font-light">Tarif masing-masing mentor akan bergantung pada:</p>
                <ul class="list-disc list-inside text-blue-600 font-bold">
                  <li>pengalaman mengajar dari guru matematika</li>
                  <li>lokasi kursus (online atau langsung) dan jarak yang ditempuh untuk ke tempat mengajar</li>
                  <li>durasi dan frekuensi kursus</li>
                </ul>
                <p>97% Mentor kami menawarkan <span class="font-bold text-blue-600">kursus gratis</span> untuk 1 jam
                  pertama</p>
              </div>
            </div>
          </div>


          <div class="border-b border-gray-300 bg-white py-2 max-w-xl mx-auto">
            <button id="accordion-btn"
              class="accordion-button text-left w-full flex justify-between items-center focus:outline-none">
              <h2 class="text-lg font-light">Berapa tarif rata-rata mentor/guru?</h2>
              <span class="text-blue-600 transition-transform duration-300" id="accordion-icon">
                <iconify-icon icon="iconamoon:arrow-down-2" width="20"></iconify-icon>
              </span>
            </button>
            <div id="accordion-content"
              class="overflow-hidden max-h-0 transition-[max-height] duration-500 ease-in-out px-0">
              <div class="mt-2 p-4 bg-[#3771C8]/10 rounded-lg">
                <p class="font-light">Tarif rata-rata mentor di Teachlink adalah sekitar:</p>
                <p class="font-bold text-blue-600">Rp 80,000/jam - Rp 150,000/jam</p>
                <p class="font-light">Tarif masing-masing mentor akan bergantung pada:</p>
                <ul class="list-disc list-inside text-blue-600 font-bold">
                  <li>pengalaman mengajar dari guru matematika</li>
                  <li>lokasi kursus (online atau langsung) dan jarak yang ditempuh untuk ke tempat mengajar</li>
                  <li>durasi dan frekuensi kursus</li>
                </ul>
                <p>97% Mentor kami menawarkan <span class="font-bold text-blue-600">kursus gratis</span> untuk 1 jam
                  pertama</p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="flex-1">
        <img src="{{ asset('assets/img/teachbot-2.png') }}" alt="" class="w-full animate-bounce">
      </div>
    </div>
  </section>


  <script>
    const buttons = document.querySelectorAll('.accordion-button');

    buttons.forEach(button => {
      const content = button.nextElementSibling;
      const iconSpan = button.querySelector('span');

      // Set initial state: content hidden with max-height 0
      content.style.overflow = 'hidden';
      content.style.maxHeight = null;
      content.style.paddingTop = '0';
      content.style.paddingBottom = '0';

      button.addEventListener('click', () => {
        if (content.style.maxHeight) {
          // close accordion
          content.style.maxHeight = null;
          content.style.paddingTop = '0';
          content.style.paddingBottom = '0';

          // put arrow down
          iconSpan.innerHTML = '<iconify-icon icon="iconamoon:arrow-down-2" width="20"></iconify-icon>';
        } else {
          // open accordion
          content.style.maxHeight = content.scrollHeight + 'px';
          content.style.paddingTop = '1rem';
          content.style.paddingBottom = '1rem';

          // put arrow up
          iconSpan.innerHTML = '<iconify-icon icon="iconamoon:arrow-up-2" width="20"></iconify-icon>';
        }
      });
    });
  </script>
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
