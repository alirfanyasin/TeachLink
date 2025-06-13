@extends('layouts.user')
@section('content')
  <div class="flex mt-32 gap-20">
    <div class="flex-2">
      <section class="flex justify-center flex-wrap items-center space-x-3">
        <div class="bg-white rounded-xl border-gray-200 p-3 mb-3 border shadow-lg">
          <div class="flex items-center justify-center space-x-3">
            <span class="font-bold text-[#0065DB]">Drum</span>
            <iconify-icon icon="lucide:drum" width="24" class="text-[#0065DB]"></iconify-icon>
          </div>
        </div>

        <div class="bg-white rounded-xl border-gray-200 p-3 mb-3 border shadow-lg">
          <div class="flex items-center justify-center space-x-3">
            <span class="font-bold text-[#0065DB]">Gitar Bass</span>
            <iconify-icon icon="ph:guitar" width="24" class="text-[#0065DB]"></iconify-icon>
          </div>
        </div>

        <div class="bg-white rounded-xl border-gray-200 p-3 mb-3 border shadow-lg">
          <div class="flex items-center justify-center space-x-3">
            <span class="font-bold text-[#0065DB]">Gitar Listrik</span>
            <iconify-icon icon="emojione-monotone:guitar" width="24" class="text-[#0065DB]"></iconify-icon>
          </div>
        </div>

        <div class="bg-white rounded-xl border-gray-200 p-3 mb-3 border shadow-lg">
          <div class="flex items-center justify-center space-x-3">
            <span class="font-bold text-[#0065DB]">Piano</span>
            <iconify-icon icon="lucide:piano" width="24" class="text-[#0065DB]"></iconify-icon>
          </div>
        </div>

        <div class="bg-white rounded-xl border-gray-200 p-3 mb-3 border shadow-lg">
          <div class="flex items-center justify-center space-x-3">
            <span class="font-bold text-[#0065DB]">Gitar Akustik</span>
            <iconify-icon icon="qlementine-icons:guitar-classical-16" width="24"
              class="text-[#0065DB]"></iconify-icon>
          </div>
        </div>
      </section>


      <section class="mb-20 mt-10">
        <h1 class="text-4xl font-bold text-[#0065DB]">2025 BISA MAIN GITAR! Les gitar elektrik dan fingerstyle
          (Online/Offline) bersama guru bersertifikat dengan 10
          tahun pengalaman mengajar</h1>
      </section>

      <section class="my-20">
        <h3 class="text-2xl font-bold text-[#0065DB]">Lokasi Kursus</h3>
        <div class="flex items-center mt-5 space-x-3">
          <div class="bg-white rounded-xl border-gray-200 p-3 border shadow-lg">
            <div class="flex items-center justify-center space-x-3">
              <span class="font-bold text-[#0065DB]">Surabaya</span>
              <iconify-icon icon="mingcute:location-2-fill" width="24" class="text-[#0065DB]"></iconify-icon>
            </div>
          </div>
          <div class="bg-[#0065DB] rounded-xl border-gray-200 p-3 border shadow-lg">
            <div class="flex items-center justify-center space-x-3">
              <span class="font-bold text-white">Online</span>
              <iconify-icon icon="fluent:people-chat-24-regular" width="24" class="text-white"></iconify-icon>
            </div>
          </div>
        </div>
      </section>

      <section class="my-10">
        <div class="bg-white shadow-xl rounded-2xl border border-gray-200 p-8">
          <header class="border-b border-gray-300 mb-5">
            <h2 class="font-bold text-2xl mb-4">Tentang Deven Swara</h2>
          </header>
          <p class="font-light text-xl">
            Saya seorang musisi dengan pengalaman 10 tahun mengajar les musik.Spesialisasi saya adalah fingerstyle dan
            gitar elektrik. Telah mengajar lebih dari 100 orang dari anak sekolah, mahasiswa, sampai yang sudah
            berkeluarga. Sehingga saya bisa ambil kesimpulan bahwa tidak ada kata terlambat dalam bermain musik.Saya
            mengajar teori musik dan teknik bermain gitar dari level pemula sampai tingkat lanjut....
          </p>
        </div>


        <div class="flex justify-center items-center mt-7 space-x-2">
          <div class="rounded-2xl overflow-hidden flex-1">
            <img src="{{ asset('assets/img/deven-1.png') }}" alt="" class="w-full h-full object-cover">
          </div>
          <div class="rounded-2xl overflow-hidden flex-1">
            <img src="{{ asset('assets/img/deven-2.png') }}" alt="" class="w-full h-full object-cover">
          </div>
          <div class="rounded-2xl overflow-hidden flex-1">
            <img src="{{ asset('assets/img/deven-3.png') }}" alt="" class="w-full h-full object-cover">
          </div>
        </div>
      </section>



      <section>
        <div class="bg-white shadow-xl rounded-2xl border border-gray-200 p-8">
          <header class="border-b border-gray-300 pb-3">
            <h2 class="font-bold text-2xl mb-4">Belajar dengan Kevin Deven Swara</h2>
            <div class="flex">
              <div class="bg-white rounded-xl border-gray-200 p-3 border-2">
                <span class="font-bold text-[#0065DB]">Semua Tingkat</span>
              </div>
            </div>
          </header>
          <p class="font-light text-xl mt-3">
            Memainkan lagu kesukaan tentu saja akan membuat kita lebih semangat lagi dalam belajar musik, khususnya
            gitar.Karena itu, saya memakai metode ini dan tentu saja sambil diselingi dengan teori dan praktek yang tepat
            sehingga musik tidak lagi menjadi sesuatu yang membosankan untuk dipelajari.Metode yang saya pakai berdasarkan
            buku Modern Music Theory for Guitarists oleh Joseph Alexander, dengan bentuk sebagai berikut:
          </p>
        </div>
      </section>


      <section class="my-10">
        <h3 class="text-2xl font-bold text-[#0065DB] mb-7">Benefit buat kamu!</h3>

        <div class="flex space-x-3 items-center mb-3">
          <img src="{{ asset('assets/icon/icon-checklist.svg') }}" alt="">
          <p class="text-xl">Jago ngobrol pakai bahasa inggris dalam sehari!</p>
        </div>
        <div class="flex space-x-3 items-center mb-3">
          <img src="{{ asset('assets/icon/icon-checklist.svg') }}" alt="">
          <p class="text-xl">Jago presentasi pakai bahasa inggris!</p>
        </div>
        <div class="flex space-x-3 items-center mb-3">
          <img src="{{ asset('assets/icon/icon-checklist.svg') }}" alt="">
          <p class="text-xl">Kisi-kisi & Tips lulus IELTS</p>
        </div>
        <div class="flex space-x-3 items-center mb-3">
          <img src="{{ asset('assets/icon/icon-checklist.svg') }}" alt="">
          <p class="text-xl">Bisa ngobrol pakai bahasa inggris!</p>
        </div>
        <div class="flex space-x-3 items-center mb-3">
          <img src="{{ asset('assets/icon/icon-checklist.svg') }}" alt="">
          <p class="text-xl">Bisa ngobrol pakai bahasa inggris!</p>
        </div>
      </section>


      {{-- Ulasan Start --}}
      <section>
        <h3 class="text-2xl font-bold text-[#0065DB] mb-7 flex items-center">Ulasan
          <span class="text-base font-light ms-3 flex">
            <img src="{{ asset('assets/icon/star.svg') }}" alt="" class="me-2"> 5 (50
            Ulasan)
          </span>
        </h3>

        <div class="bg-white rounded-2xl shadow-xl p-8 mb-5">
          <div class="flex justify-between items-center">
            <div class="flex items-center space-x-2">
              <div class="w-14 h-14 rounded-full overflow-hidden">
                <img src="{{ asset('assets/img/avatar-3.png') }}" class="w-full h-full" alt="">
              </div>
              <h4 class="text-xl font-bold">Ananda Rahmawati</h4>
            </div>
            <span class="text-base font-light  flex items-center justify-end bg-[#FFF4DB] px-2 py-0.1 rounded-lg">
              <img src="{{ asset('assets/icon/star.svg') }}" alt="" class="me-2 w-5"> <span
                class="text-base font-semibold">5</span>
            </span>
          </div>
          <p class="mt-4 text-xl font-light">Sempurna! Kak Deven sabar banget menghadapi saya yang lambat, juga memahami
            betul apa
            yang
            dibutuhkan
            muridnya. Pembelajaran yang fleksibel dan efektif, seru, dan menyenangkan.</p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl p-8 mb-5">
          <div class="flex justify-between items-center">
            <div class="flex items-center space-x-2">
              <div class="w-14 h-14 rounded-full overflow-hidden">
                <img src="{{ asset('assets/img/avatar-4.png') }}" class="w-full h-full" alt="">
              </div>
              <h4 class="text-xl font-bold">Ananda Rahmawati</h4>
            </div>
            <span class="text-base font-light  flex items-center justify-end bg-[#FFF4DB] px-2 py-0.1 rounded-lg">
              <img src="{{ asset('assets/icon/star.svg') }}" alt="" class="me-2 w-5"> <span
                class="text-base font-semibold">5</span>
            </span>
          </div>
          <p class="mt-4 text-xl font-light">Sempurna! Kak Deven sabar banget menghadapi saya yang lambat, juga memahami
            betul apa
            yang
            dibutuhkan
            muridnya. Pembelajaran yang fleksibel dan efektif, seru, dan menyenangkan.</p>
        </div>

      </section>
      {{-- Ulasan End --}}


    </div>


    <section class="flex-1">
      <div class="bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer">
        <div class="overflow-hidden">
          <img src="{{ asset('assets/img/card-mentor/01.png') }}"
            class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110" alt="">
        </div>
        <div class="p-8 mt-3">
          <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Kevin Merco</h4>
          <p class="flex items-center"><img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt="">
            5 (50 ulasan)</p>
          <div class="mb-3">
            <small class="text-gray-400">Tarif per jam:</small>
            <p class="text-[#0065DB] font-semibold text-xl">Rp 100,000/jam</p>
          </div>

          <div class="mb-3">
            <small class="text-gray-400">Tarif online:</small>
            <p class="text-[#0065DB] font-semibold text-xl">Rp 85,000/jam</p>
          </div>

          <div class="mb-3">
            <small class="text-gray-400">Jumlah murid:</small>
            <p class="text-[#0065DB] font-semibold text-xl">21+</p>
          </div>

          <div class="bg-[#D0E6FF] flex items-center p-2 rounded-xl space-x-2">
            <img src="{{ asset('assets/icon/info.png') }}" alt="">
            <small>
              Hubungi mentor terlebih dahulu untuk memastikan ketersediaan jadwal
            </small>
          </div>

          <button
            class="bg-white rounded-xl border-2 border-gray-300 mt-3 w-full py-2 flex hover:cursor-pointer items-center text-[#0065DB] justify-center space-x-3">
            <span class="font-bold">Hubungi Mentor</span>
            <img src="{{ asset('assets/icon/chat-icon.svg') }}" class="w-5" alt="">
          </button>

          <a href="/mentor-reservasi"
            class="rounded-xl border-2 border-gray-300 mt-3 w-full py-2 flex hover:cursor-pointer items-center text-white bg-[#0065DB] justify-center space-x-3">
            <span class="font-bold">Reservasi Kursus</span>
            <img src="{{ asset('assets/icon/right-arrow.svg') }}" class="w-5" alt="">
          </a>
        </div>
      </div>
    </section>
  </div>
@endsection
