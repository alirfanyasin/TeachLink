@extends('layouts.user')
@section('hero')
  <section class="h-[500px] w-full bg-gradient-to-b from-[#0152B4] to-[#12B9CC] rounded-b-3xl">
    <div class="flex items-center h-full justify-center">
      <div class="text-center">
        <h1 class="text-center font-bold text-6xl text-white">Selamat Datang <br> di TechVerse</h1>
        <p class="text-2xl mt-5 text-white font-light">Bagikan Keahlianmu. <br>
          Bantu generasi muda Indonesia!</p>
      </div>
    </div>
  </section>
@endsection
@section('content')
  <section>
    <header class="text-center">
      <h3 class="mt-10 font-bold text-[#0065DB] text-3xl">Tempat Para Mentor <br> Berkembang dan Menginspirasi
      </h3>
      <p class="text-xl mt-8 font-light">TeachLink juga sebagai ruang tumbuh bagi para mentor yang ingin berbagi ilmu,
        memperluas
        dampak,
        dan menjangkau
        lebih banyak pembelajar. Baik Anda seorang profesional berpengalaman, pengajar, atau praktisi yang ahli di
        bidangnya, TeachLink membuka peluang untuk mengajar secara online maupun langsung di lokasi siswa. Kami hadir
        untuk membantu Anda membagikan pengetahuan dengan cara yang fleksibel, bermakna, dan berkelanjutan.
        Bersama TeachLink, Anda tidak hanya mengajar, Anda membentuk perjalanan belajar seseorang.</p>
    </header>
  </section>

  <section class="my-40">
    <div class="grid grid-cols-3 gap-5">
      <div class="text-center">
        <div class="rounded-2xl overflow-hidden">
          <img src="{{ asset('assets/icon/date.png') }}" alt="" class="w-full h-full rounded-3xl mb-8">
        </div>
        <h3 class="text-2xl font-bold text-black mb-2">Atur Jadwal Sendiri</h3>
        <p class="text-lg font-light">Anda memiliki kendali penuh atas waktu dan jumlah sesi yang ingin diambil.</p>
      </div>

      <div class="text-center">
        <div class="rounded-2xl overflow-hidden">
          <img src="{{ asset('assets/icon/zone.png') }}" alt="" class="w-full h-full rounded-3xl mb-8">
        </div>
        <h3 class="text-2xl font-bold text-black mb-2">Jangkauan Lebih Luas</h3>
        <p class="text-lg font-light">Terhubung dengan siswa dari berbagai wilayah yang membutuhkan bimbingan di bidang
          keahlian Anda.</p>
      </div>

      <div class="text-center">
        <div class="rounded-2xl overflow-hidden">
          <img src="{{ asset('assets/icon/money.png') }}" alt="" class="w-full h-full rounded-3xl mb-8">
        </div>
        <h3 class="text-2xl font-bold text-black mb-2">Atur Tarif Sendiri</h3>
        <p class="text-lg font-light">Anda dapat mengatur pendapatan sesuai preferensi anda untuk setiap sesi menjadi
          guru
          les</p>
      </div>
    </div>

    <div class="mt-10 flex justify-center">
      <a href="/mentor-registrasi"
        class="bg-[#0052B4] text-white rounded-full px-3 py-3 flex items-center justify-between w-72">
        <span class="text-lg mr-3 ml-5">Daftar Sekarang</span>
        <img src="{{ asset('assets/icon/arrow-right.svg') }}" alt="">
      </a>
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
        <img src="{{ asset('assets/img/teachbot-2.png') }}" alt="" class="w-full">
      </div>
    </div>
  </section>
@endsection
@push('js')
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
@endpush
