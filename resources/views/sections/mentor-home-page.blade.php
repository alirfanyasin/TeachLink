<section id="mentor" class="mt-32 mb-32 max-w-7xl mx-auto px-4">
  <!-- Header -->
  <header class="text-left mb-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
    <div class="flex items-center flex-wrap gap-2">
      <h2 class="text-black font-bold text-2xl md:text-3xl">1 Jutaan mentor telah terevaluasi</h2>
      <div class="flex items-center text-yellow-400 ml-0 md:ml-4">
        <iconify-icon icon="material-symbols:star-rounded" width="28" class="md:w-8"></iconify-icon>
        <iconify-icon icon="material-symbols:star-rounded" width="28" class="md:w-8"></iconify-icon>
        <iconify-icon icon="material-symbols:star-rounded" width="28" class="md:w-8"></iconify-icon>
        <iconify-icon icon="material-symbols:star-rounded" width="28" class="md:w-8"></iconify-icon>
        <iconify-icon icon="material-symbols:star-rounded" width="28" class="md:w-8"></iconify-icon>
      </div>
    </div>
    <div class="flex">
      <button id="arrowLeft" class="p-2 rounded-full bg-[#EFEFEF] hover:bg-[#0065DB] mr-2 hover:cursor-pointer">
        <img src="{{ asset('assets/icon/arrow-left.svg') }}" alt="">
      </button>
      <button id="arrowRight" class="p-2 rounded-full bg-[#EFEFEF] hover:bg-[#0065DB] hover:cursor-pointer">
        <img src="{{ asset('assets/icon/arrow-right.svg') }}" alt="">
      </button>
    </div>
  </header>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Slider Container -->
  <div class="relative">
    <div id="sliderContainer" class="swiper flex gap-6 no-scrollbar pb-10">
      <div class="swiper-wrapper">
        <!-- CARD 1 -->
        <div class="swiper-slide bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer max-w-[350px]">
          <div class="overflow-hidden">
            <img src="{{ asset('assets/img/mentor/17.png') }}"
              class="w-full h-56 object-cover transform transition-transform duration-500 ease-in-out group-hover:scale-105" alt="">
          </div>
          <div class="p-8 mt-3">
            <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Rendi</h4>
            <p class="flex items-center">
              <img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt=""> 5 (50 ulasan)
            </p>
            <p class="font-light text-lg my-2">Surabaya - Tatap muka & Online</p>
            <p class="font-bold text-xl text-black mb-2">Matematika</p>
            <p class="font-light text-xl">
              Lulusan S2 Statistika ITS yang pernah juara kompetisi serta memiliki pengalaman...
            </p>
            <p class="text-[#0065DB] font-semibold text-xl mt-4">Rp 100,000/jam</p>
          </div>
        </div>
        <!-- CARD 2 -->
        <div class="swiper-slide bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer max-w-[350px]">
          <div class="overflow-hidden">
            <img src="{{ asset('assets/img/mentor/18.png') }}"
              class="w-full h-56 object-cover transform transition-transform duration-500 ease-in-out group-hover:scale-105" alt="">
          </div>
          <div class="p-8 mt-3">
            <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Aldy</h4>
            <p class="flex items-center">
              <img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt=""> 5 (50 ulasan)
            </p>
            <p class="font-light text-lg my-2">Surabaya - Tatap muka & Online</p>
            <p class="font-bold text-xl text-black mb-2">Bahasa Prancis</p>
            <p class="font-light text-xl">Lulusan Sastra Prancis dengan memiliki DELF B1 menawarkan kursus bahasa
              Perancis....</p>
            <p class="text-[#0065DB] font-semibold text-xl mt-4">Rp 100,000/jam</p>
          </div>
        </div>
        <!-- CARD 3 -->
        <div class="swiper-slide bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer max-w-[350px]">
          <div class="overflow-hidden">
            <img src="{{ asset('assets/img/mentor/19.png') }}"
              class="w-full h-56 object-cover transform transition-transform duration-500 ease-in-out group-hover:scale-105" alt="">
          </div>
          <div class="p-8 mt-3">
            <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Fauzan</h4>
            <p class="flex items-center">
              <img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt=""> 5 (50 ulasan)
            </p>
            <p class="font-light text-lg my-2">Surabaya - Tatap muka & Online</p>
            <p class="font-bold text-xl text-black mb-2">Fisika</p>
            <p class="font-light text-xl">Alumni Teknik Fisika UGM berpengalaman 8 tahun mengajar dan menaklukkan Fisika
              dan...</p>
            <p class="text-[#0065DB] font-semibold text-xl mt-4">Rp 100,000/jam</p>
          </div>
        </div>
        <!-- CARD 4 -->
        <div class="swiper-slide bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer max-w-[350px]">
          <div class="overflow-hidden">
            <img src="{{ asset('assets/img/card-mentor/01.png') }}"
              class="w-full h-56 object-cover transform transition-transform duration-500 ease-in-out group-hover:scale-105" alt="">
          </div>
          <div class="p-8 mt-3">
            <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Kevin Merco</h4>
            <p class="flex items-center">
              <img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt=""> 5 (50 ulasan)
            </p>
            <p class="font-light text-lg my-2">Surabaya - Tatap muka & Online</p>
            <p class="font-bold text-xl text-black mb-2">Bahasa Inggris</p>
            <p class="font-light text-xl">
              ENG-ID. Kids Friendly | Bilingual Digital Arts & Comic Expert | 15+ Years Experience....
            </p>
            <p class="text-[#0065DB] font-semibold text-xl mt-4">Rp 100,000/jam</p>
          </div>
        </div>
        <!-- CARD 5 -->
        <div class="swiper-slide bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer max-w-[350px]">
          <div class="overflow-hidden">
            <img src="{{ asset('assets/img/card-mentor/02.png') }}"
              class="w-full h-56 object-cover transform transition-transform duration-500 ease-in-out group-hover:scale-105" alt="">
          </div>
          <div class="p-8 mt-3">
            <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Maudia Tamara</h4>
            <p class="flex items-center">
              <img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt=""> 5 (50 ulasan)
            </p>
            <p class="font-light text-lg my-2">Surabaya - Online</p>
            <p class="font-bold text-xl text-black mb-2">Bahasa Prancis</p>
            <p class="font-light text-xl">Lulusan Sastra Prancis dengan memiliki DELF B1 menawarkan kursus bahasa
              Perancis....</p>
            <p class="text-[#0065DB] font-semibold text-xl mt-4">Rp 100,000/jam</p>
          </div>
        </div>
        <!-- CARD 6 -->
        <div class="swiper-slide bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer max-w-[350px]">
          <div class="overflow-hidden">
            <img src="{{ asset('assets/img/mentor/16.png') }}"
              class="w-full h-56 object-cover transform transition-transform duration-500 ease-in-out group-hover:scale-105"
              alt="">
          </div>
          <div class="p-8 mt-3">
            <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Aditya Pratama</h4>
            <p class="flex items-center">
              <img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt=""> 5 (50 ulasan)
            </p>
            <p class="font-light text-lg my-2">Surabaya - Tatap muka & Online</p>
            <p class="font-bold text-xl text-black mb-2">Menggambar</p>
            <p class="font-light text-xl">Belajar menggambar hampir apa saja dalam waktu singkat! Kembangkan...</p>
            <p class="text-[#0065DB] font-semibold text-xl mt-4">Rp 100,000/jam</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA -->
  <div class="mt-10 flex justify-center">
    <a href="/mentor"
      class="bg-[#0065DB] text-white rounded-full px-6 py-3 flex items-center w-fit gap-3 hover:bg-blue-700 transition">
      <span class="text-base md:text-lg">Lihat Lebih Banyak</span>
      <img src="{{ asset('assets/icon/arrow-right.svg') }}" alt="">
    </a>
  </div>
</section>

<!-- Hide Scrollbar -->
<style>
  .no-scrollbar::-webkit-scrollbar {
    display: none;
  }

  .no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>

<!-- JS Slider Controls -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const totalSlides = document.querySelectorAll('#sliderContainer .swiper-slide').length;
    const enableLoop = totalSlides >= 6; 

    const swiper = new Swiper('#sliderContainer', {
      slidesPerView: 1,
      spaceBetween: 24,
      breakpoints: {
        640: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
      navigation: {
        nextEl: '#arrowRight',
        prevEl: '#arrowLeft',
      },
      grabCursor: true,
      centeredSlides: false,
      slidesPerGroup: 1,
      loop: enableLoop,
    });
  });
</script>
