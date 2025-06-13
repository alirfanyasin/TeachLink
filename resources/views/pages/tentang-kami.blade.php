@extends('layouts.user')
@section('hero')
  <div class="bg-gradient-to-b from-[#0065DB] to-[#003675]">
    <div class="md:w-9/12 w-10/12 mx-auto pt-56 text-center pb-20">
      <h2 class="text-white font-bold text-5xl mb-8">Ilmu yang dibagikan, <br>
        masa depan yang dibentuk</h2>
      <p class="text-white text-xl font-light">Dengan ratusan mentor dari berbagai bidang keahlian dan semangat untuk
        menginspirasi,
        TeachLink menjadi jembatan bagi siapa saja yang ingin belajar dan berkembang. Kami hadir untuk memudahkan siapa
        pun menemukan mentor terbaik secara online maupun langsung ke rumah
        demi membangun masa depan yang lebih cemerlang.</p>
    </div>

    <div>
      <div class="relative overflow-hidden">
        <div id="slider-wrapper" class="flex gap-4 w-max animate-slider">
          <div id="slider-1" class="flex gap-4">
            {{-- semua elemen gambar kamu --}}
            @for ($i = 0; $i < 2; $i++)
              {{-- Loop 2x isi gambar agar seamless --}}
              <div class="flex gap-4">
                @foreach (['02.png', '01.png', '15.png', '03.png', '04.png', '05.png', '06.png', '07.png', '08.png', '09.png', '10.png', '11.png', '12.png', '13.png', '14.png'] as $img)
                  <div class="w-32 h-32 overflow-hidden rounded-xl bg-gradient-to-b from-[#539EFF] to-[#003057]">
                    <img src="{{ asset('assets/img/mentor/' . $img) }}" alt="" class="w-full h-full object-cover">
                  </div>
                @endforeach
              </div>
            @endfor
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <div class="relative overflow-hidden">
        <div id="slider-wrapper-2" class="flex gap-4 w-max animate-slider-2">
          <div id="slider-2" class="flex gap-4">
            {{-- semua elemen gambar kamu --}}
            @for ($i = 0; $i < 2; $i++)
              {{-- Loop 2x isi gambar agar seamless --}}
              <div class="flex gap-4">
                @foreach (['02.png', '01.png', '15.png', '03.png', '04.png', '05.png', '06.png', '07.png', '08.png', '09.png', '10.png', '11.png', '12.png', '13.png', '14.png'] as $img)
                  <div class="w-32 h-32 overflow-hidden rounded-xl bg-gradient-to-b from-[#539EFF] to-[#003057]">
                    <img src="{{ asset('assets/img/mentor/' . $img) }}" alt="" class="w-full h-full object-cover">
                  </div>
                @endforeach
              </div>
            @endfor
          </div>
        </div>
      </div>
    </div>
  </div>


  <style>
    @keyframes scrollSlider {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    .animate-slider {
      animation: scrollSlider 30s linear infinite;
    }

    .animate-slider:hover {
      animation-play-state: paused;
    }


    @keyframes scrollSlider2 {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    .animate-slider-2 {
      animation: scrollSlider2 30s linear infinite reverse;
    }

    .animate-slider-2:hover {
      animation-play-state: paused;
    }
  </style>
@endsection

@section('content')
  <section>
    <div class="text-center my-20">
      <h2 class="text-[#000957] font-bold text-4xl mb-5">Tentang TeachLink</h2>
      <p class="font-light text-2xl">Teachlink adalah pelopor platform yang berfokus mengusung pembangunan kemajuan
        edukasi
        di Indonesia. TeachLink mengkhususkan pelayanan sebagai penghubung antara mahasiswa dengan mitra guru/mentor yang
        sudah terseleksi, dengan begitu Teachlink hadir dengan mitra terpercaya untuk kemudahan proses belajar
        generasi muda Indonesia</p>
    </div>
  </section>

  <section>
    <div class="grid grid-cols-2 gap-4">
      <div class="overflow-hidden rounded-l-2xl">
        <img src="{{ asset('assets/img/img-tk-1.png') }}" alt="" class="w-full">
      </div>

      <div class="overflow-hidden rounded-r-2xl">
        <img src="{{ asset('assets/img/img-tk-2.png') }}" alt="" class="w-full">
      </div>
    </div>

    <div class="flex justify-center">
      <div class="countdown py-5  text-black mx-auto flex justify-between w-full">
        <div class="text-center w-full">
          <h3 class="font-bold text-6xl">20</h3>
          <p class="">Bidang</p>
        </div>
        <div class="text-center w-full">
          <h3 class="font-bold text-6xl">82</h3>
          <p class="">Mentor</p>
        </div>
        <div class="text-center w-full">
          <h3 class="font-bold text-6xl">200+</h3>
          <p class="">Sesi</p>
        </div>
        <div class="text-center w-full">
          <h3 class="font-bold text-6xl">150+</h3>
          <p class="">Peserta</p>
        </div>
      </div>
    </div>
  </section>



  <section class="my-40">

    <div class="text-black flex justify-between items-center gap-5">

      <div class="flex-1">
        <div class="mb-5">
          <h2 class="font-bold text-3xl">Visi</h2>
          <p class="text-xl">Meratakan tingkat pendidikan sekaligus pemahaman mahasiswa dan membuka lapangan kerja lebih
            untuk para pengajar di Surabaya.</p>
        </div>

        <div class="mb-5">
          <h2 class="font-bold text-3xl">Misi</h2>
          <ol class="list-decimal pl-5 text-xl space-y-2">
            <li>Memberikan Fasilitas atau menjadi perantara pada mentor dan mahasiswa untuk menciptakan lingkungan
              mengajar yang lebih baik.</li>
            <li>Membuat konten bermanfaat untuk meningkatkan pengetahuan mahasiswa</li>
            <li>Memotivasi mahasiswa di Surabaya dengan adanya interaksi bersama para pengajar berprestasi.</li>
          </ol>
        </div>
      </div>

      <div class="flex-1">
        <img src="{{ asset('assets/img/teachbot.png') }}" alt="">
      </div>


    </div>

  </section>


  <section class="my-40">
    <div class="bg-[#008CFF]/15 w-full rounded-2xl p-10 mb-5">
      <h1 class="text-4xl text-black text-center font-bold mb-10 mt-5">Tempat yang sempurna untuk belajar!</h1>
      <div class="p-10 rounded-2xl bg-white shadow-2xl flex justify-start items-center mb-10">
        <img src="{{ asset('assets/icon/tk-reward-1.svg') }}" alt="" class="w-40">
        <div class="ms-5">
          <h3 class="font-bold text-black text-2xl">Kualitas di atas segalanya</h3>
          <p>Profil terverifikasi, ijazah tervalidasi, ulasan dari siswa, ketersediaan terjamin, siswa dengan motivasi
            tinggi, kami menawarkan pengajaran terbaik untuk belajar dengan tenang.</p>
        </div>
      </div>
      <div class="p-10 rounded-2xl bg-white shadow-2xl flex justify-start items-center mb-10">
        <img src="{{ asset('assets/icon/tk-reward-2.svg') }}" alt="" class="w-40">
        <div class="ms-5">
          <h3 class="font-bold text-black text-2xl">Pilihan preferensi</h3>
          <p>Dengan lebih dari 50 mentor kami, Anda memiliki akses ke banyak pilihan guru. Di TeachLink, kami yakin bahwa
            pilihan ini adalah kunci kesuksesan Anda. Belajarlah dengan cara terbaik dengan menemukan guru yang cocok
            untuk Anda!</p>
        </div>
      </div>
      <div class="p-10 rounded-2xl bg-white shadow-2xl flex justify-start items-center mb-10">
        <img src="{{ asset('assets/icon/tk-reward-1.svg') }}" alt="" class="w-40">
        <div class="ms-5">
          <h3 class="font-bold text-black text-2xl">Membangkitkan rasa ingin tahu</h3>
          <p>Dengan lebih dari 50 mentor kami, Anda memiliki akses ke banyak pilihan guru. Di TeachLink, kami yakin bahwa
            pilihan ini adalah kunci kesuksesan Anda. Belajarlah dengan cara terbaik dengan menemukan guru yang cocok
            untuk Anda!</p>
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
              <h2 class="text-lg font-light">Bagaimana cara menggunakan Teachlink?</h2>
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
              <h2 class="text-lg font-light">Apakah Kami bisa kursus secara offline juga?</h2>
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
              <h2 class="text-lg font-light">Apakah bisa pembatalan jadwal dengan mentor?</h2>
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
              <h2 class="text-lg font-light">Apakah bisa melaksanakan sesi di tempat lain selain dirumah?</h2>
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
        <img src="{{ asset('assets/img/teachbot-2.png') }}" alt="" class="w-full">
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
