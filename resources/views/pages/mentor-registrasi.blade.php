@extends('layouts.user')
@section('content')
  <div class="w-6/12 mx-auto">
    <section class="mt-40 mb-10">
      <h1 class="font-bold text-center text-4xl">
        <div class="text-[#0065DB]"> Bidang mana</div>
        <div>yang ingin Anda ajar? </div>
      </h1>
    </section>

    <section>
      <div class="bg-white shadow-xl rounded-xl border-2 border-gray-300 flex items-center px-4 py-2">
        <img src="{{ asset('assets/icon/searching.svg') }}" class="w-5 h-5" alt="">
        <input type="text" name="" id="" class="px-4 py-1 focus:outline-0  w-full"
          placeholder="Contoh: Bahasa Inggris">
      </div>
    </section>

    <section class="mt-5">
      <div class="bg-white p-6 rounded-2xl border-2 border-gray-300 shadow-2xl h-[400px] overflow-y-auto">
        <div class="max-w-xl mx-auto bg-white rounded-lg mb-2">
          <button id="accordion-btn"
            class="accordion-button bg-[#E3F0FF] rounded-lg p-3 text-left w-full flex justify-between items-center focus:outline-none">
            <h2 class="text-lg font-bold">Matematika</h2>
            <span class="text-blue-600 transition-transform duration-300" id="accordion-icon">
              <iconify-icon icon="iconamoon:arrow-down-2" width="20"></iconify-icon>
            </span>
          </button>
          <div id="accordion-content"
            class="overflow-hidden max-h-0 rounded-lg transition-[max-height] duration-500 ease-in-out px-0">
            <div class="mt-1 p-4 pb-7 bg-[#3771C8]/10 rounded-lg">
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

        <div class="max-w-xl mx-auto bg-white rounded-lg mb-2">
          <button id="accordion-btn"
            class="accordion-button bg-[#E3F0FF] rounded-lg p-3 text-left w-full flex justify-between items-center focus:outline-none">
            <h2 class="text-lg font-bold">Bahasa Inggris</h2>
            <span class="text-blue-600 transition-transform duration-300" id="accordion-icon">
              <iconify-icon icon="iconamoon:arrow-down-2" width="20"></iconify-icon>
            </span>
          </button>
          <div id="accordion-content"
            class="overflow-hidden max-h-0 rounded-lg transition-[max-height] duration-500 ease-in-out px-0">
            <div class="mt-1 p-4 pb-7 bg-[#3771C8]/10 rounded-lg">
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

        <div class="max-w-xl mx-auto bg-white rounded-lg mb-2">
          <button id="accordion-btn"
            class="accordion-button bg-[#E3F0FF] rounded-lg p-3 text-left w-full flex justify-between items-center focus:outline-none">
            <h2 class="text-lg font-bold">Ilmu Pengetahuan Alam</h2>
            <span class="text-blue-600 transition-transform duration-300" id="accordion-icon">
              <iconify-icon icon="iconamoon:arrow-down-2" width="20"></iconify-icon>
            </span>
          </button>
          <div id="accordion-content"
            class="overflow-hidden max-h-0 rounded-lg transition-[max-height] duration-500 ease-in-out px-0">
            <div class="mt-1 p-4 pb-7 bg-[#3771C8]/10 rounded-lg">
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

        <div class="max-w-xl mx-auto bg-white rounded-lg mb-2">
          <button id="accordion-btn"
            class="accordion-button bg-[#E3F0FF] rounded-lg p-3 text-left w-full flex justify-between items-center focus:outline-none">
            <h2 class="text-lg font-bold">Menggambar</h2>
            <span class="text-blue-600 transition-transform duration-300" id="accordion-icon">
              <iconify-icon icon="iconamoon:arrow-down-2" width="20"></iconify-icon>
            </span>
          </button>
          <div id="accordion-content"
            class="overflow-hidden max-h-0 rounded-lg transition-[max-height] duration-500 ease-in-out px-0">
            <div class="mt-1 p-4 pb-7 bg-[#3771C8]/10 rounded-lg">
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

        <div class="max-w-xl mx-auto bg-white rounded-lg mb-2">
          <button id="accordion-btn"
            class="accordion-button bg-[#E3F0FF] rounded-lg p-3 text-left w-full flex justify-between items-center focus:outline-none">
            <h2 class="text-lg font-bold">Renang</h2>
            <span class="text-blue-600 transition-transform duration-300" id="accordion-icon">
              <iconify-icon icon="iconamoon:arrow-down-2" width="20"></iconify-icon>
            </span>
          </button>
          <div id="accordion-content"
            class="overflow-hidden max-h-0 rounded-lg transition-[max-height] duration-500 ease-in-out px-0">
            <div class="mt-1 p-4 pb-7 bg-[#3771C8]/10 rounded-lg">
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

        <div class="max-w-xl mx-auto bg-white rounded-lg mb-2">
          <button id="accordion-btn"
            class="accordion-button bg-[#E3F0FF] rounded-lg p-3 text-left w-full flex justify-between items-center focus:outline-none">
            <h2 class="text-lg font-bold">Piano</h2>
            <span class="text-blue-600 transition-transform duration-300" id="accordion-icon">
              <iconify-icon icon="iconamoon:arrow-down-2" width="20"></iconify-icon>
            </span>
          </button>
          <div id="accordion-content"
            class="overflow-hidden max-h-0 rounded-lg transition-[max-height] duration-500 ease-in-out px-0">
            <div class="mt-1 p-4 pb-7 bg-[#3771C8]/10 rounded-lg">
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

        <div class="max-w-xl mx-auto bg-white rounded-lg mb-2">
          <button id="accordion-btn"
            class="accordion-button bg-[#E3F0FF] rounded-lg p-3 text-left w-full flex justify-between items-center focus:outline-none">
            <h2 class="text-lg font-bold">Gitar</h2>
            <span class="text-blue-600 transition-transform duration-300" id="accordion-icon">
              <iconify-icon icon="iconamoon:arrow-down-2" width="20"></iconify-icon>
            </span>
          </button>
          <div id="accordion-content"
            class="overflow-hidden max-h-0 rounded-lg transition-[max-height] duration-500 ease-in-out px-0">
            <div class="mt-1 p-4 pb-7 bg-[#3771C8]/10 rounded-lg">
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
    </section>
  </div>
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
