<section id="testimoni" class="mt-32 mb-52">
  <header class="text-right mb-10">
    <h2 class="text-black font-bold text-3xl mb-3">AKAT (Apa KAta Tech-verse)</h2>
  </header>

  <div class="grid grid-cols-2 gap-10">
    <div>
      <img src="{{ asset('assets/img/mascot-2.png') }}" class="w-full" alt="Non Akademik">
    </div>

    <div>
      <!-- Slider Container -->
      <div id="akat-swiper" class="swiper">
        <div class="swiper-wrapper">

          <!-- Testimonial Slide 1 -->
          <div class="swiper-slide">
            <div class="bg-white shadow-xl rounded-2xl p-10 m-1 h-full">
              <div class="w-24 h-24 rounded-full flex items-center space-x-4">
                <img src="{{ asset('assets/img/avatar-3.png') }}" alt="" class="w-full h-full object-cover">
                <h3 class="font-bold text-3xl text-black">Ananda Rahmawati</h3>
              </div>

              <h2 class="text-3xl font-bold mt-16">
                "Dengan jadwal yang padat, Techlink membantu saya dalam mengelola waktu dan belajar secara efektif."
              </h2>

              <div class="flex mt-10">
                <img src="{{ asset('assets/icon/star.svg') }}" alt="">
                <img src="{{ asset('assets/icon/star.svg') }}" alt="">
                <img src="{{ asset('assets/icon/star.svg') }}" alt="">
                <img src="{{ asset('assets/icon/star.svg') }}" alt="">
                <img src="{{ asset('assets/icon/star.svg') }}" alt="">
              </div>
            </div>
          </div>

          <!-- Testimonial Slide 2 -->
          <div class="swiper-slide">
            <div class="bg-white shadow-xl rounded-2xl p-10 m-1 h-full">
              <div class="w-24 h-24 rounded-full flex items-center space-x-4">
                <img src="{{ asset('assets/img/avatar-2.png') }}" alt="" class="w-full h-full object-cover">
                <h3 class="font-bold text-3xl text-black">Budi Santoso</h3>
              </div>

              <h2 class="text-3xl font-bold mt-16">
                "Techlink membuat proses belajar lebih mudah dan menyenangkan. Mentor-nya ramah dan profesional!"
              </h2>

              <div class="flex mt-10">
                <img src="{{ asset('assets/icon/star.svg') }}" alt="">
                <img src="{{ asset('assets/icon/star.svg') }}" alt="">
                <img src="{{ asset('assets/icon/star.svg') }}" alt="">
                <img src="{{ asset('assets/icon/star.svg') }}" alt="">
                <img src="{{ asset('assets/icon/star-half-empty.svg') }}" alt=""> <!-- Contoh rating tidak penuh -->
              </div>
            </div>
          </div>

          <!-- Testimonial Slide 3 -->
          <div class="swiper-slide">
            <div class="bg-white shadow-xl rounded-2xl p-10 m-1 h-full">
              <div class="w-24 h-24 rounded-full flex items-center space-x-4">
                <img src="{{ asset('assets/img/avatar-1.png') }}" alt="" class="w-full h-full object-cover">
                <h3 class="font-bold text-3xl text-black">Siti Nurhaliza</h3>
              </div>

              <h2 class="text-3xl font-bold mt-16">
                "Belajar coding jadi lebih cepat paham karena mentor Techlink sangat berpengalaman."
              </h2>

              <div class="flex mt-10">
                <img src="{{ asset('assets/icon/star.svg') }}" alt="">
                <img src="{{ asset('assets/icon/star.svg') }}" alt="">
                <img src="{{ asset('assets/icon/star.svg') }}" alt="">
                <img src="{{ asset('assets/icon/star.svg') }}" alt="">
                <img src="{{ asset('assets/icon/star.svg') }}" alt="">
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Navigation Buttons -->
      <div class="flex mt-5">
        <button id="akat-arrowLeft" class="p-2 rounded-full bg-[#EFEFEF] hover:cursor-pointer mr-2 hover:bg-[#0065DB]">
          <img src="{{ asset('assets/icon/arrow-left.svg') }}" alt="">
        </button>
        <button id="akat-arrowRight" class="p-2 rounded-full bg-[#EFEFEF] hover:cursor-pointer hover:bg-[#0065DB]">
          <img src="{{ asset('assets/icon/arrow-right.svg') }}" alt="">
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> 

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('#akat-swiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: '#akat-arrowRight',
        prevEl: '#akat-arrowLeft',
      },
    });
  });
</script>