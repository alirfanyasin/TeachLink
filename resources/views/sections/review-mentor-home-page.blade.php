<section class="mb-52 mt-32">
  <header class="text-left mb-10 flex items-center justify-between">
    <div class="flex">
      <h2 class="text-black font-bold text-3xl mb-3 mr-3">Pasangan Yang Sempurna </h2>
      <img src="{{ asset('assets/icon/medal.svg') }}" width="32" alt="">
    </div>
    <div class="flex">
      {{-- Navigator --}}
      <button id="review-arrowLeft" class="p-2 rounded-full bg-[#EFEFEF] hover:cursor-pointer mr-2 hover:bg-[#0065DB]">
        <img src="{{ asset('assets/icon/arrow-left.svg') }}" alt="">
      </button>
      <button id="review-arrowRight" class="p-2 rounded-full bg-[#EFEFEF] hover:cursor-pointer hover:bg-[#0065DB]">
        <img src="{{ asset('assets/icon/arrow-right.svg') }}" alt="">
      </button>
    </div>
  </header>

  {{-- Slider --}}
  <div id="review-sliderContainer" class="flex gap-10 overflow-x-auto scroll-smooth scrollbar-hide">


    {{-- Card 1 --}}
    <div class="card rounded-2xl relative w-1/2 shrink-0">

      <h4 class="text-blue-600 mb-3"><span class="font-bold">Putri Anindya -</span> Akutansi</h4>
      <div class="w-8/12">
        <img src="{{ asset('assets/img/img-4.png') }}" alt="" class="rounded-2xl">
      </div>
      <div class="flex justify-end absolute right-0 bottom-28">
        <div class="flex bg-white/50 backdrop-blur-2xl p-4 rounded-xl space-x-4 items-start w-10/12 shadow-2xl">
          <div class="w-10 h-10 rounded-full overflow-hidden shrink-0">
            <img src="{{ asset('assets/img/avatar-1.png') }}" alt="avatar" class="w-full h-full object-cover">
          </div>
          <div>
            <p class="">
              Kakaknya baik bangett, mau ngajarin aku dari dasar banget. Terus ngasih tips-tips cara ngerjain
              akutansi yang cepet. Makasihh Ka Putri!!
            </p>
            <div class="flex justify-end mt-2">
              <img src="{{ asset('assets/icon/star.svg') }}" alt="" class="mr-2">
              5
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-end absolute right-0 -bottom-10">
        <div class="flex bg-white/50 backdrop-blur-2xl p-4 rounded-xl space-x-4 items-start w-10/12 shadow-2xl">
          <div class="w-10 h-10 rounded-full overflow-hidden shrink-0">
            <img src="{{ asset('assets/img/avatar-2.png') }}" alt="avatar" class="w-full h-full object-cover">
          </div>

          <div>
            <p class="">
              Kerenn kakanya udah tau banyak banget di dunia akutansi. Kakaknya humble, cakep seru banget pokonya!
              hehe.
            </p>
            <div class="flex justify-end mt-2">
              <img src="{{ asset('assets/icon/star.svg') }}" alt="" class="mr-2">
              5
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Card 2 --}}
    <div class="card rounded-2xl relative w-1/2 shrink-0">

      <h4 class="text-blue-600 mb-3"><span class="font-bold">Alexander -</span> Desain, Animasi</h4>
      <div class="w-8/12">
        <img src="{{ asset('assets/img/img-5.png') }}" alt="" class="rounded-2xl">
      </div>
      <div class="flex justify-end absolute right-0 bottom-28">
        <div class="flex bg-white/50 backdrop-blur-2xl p-4 rounded-xl space-x-4 items-start w-10/12 shadow-2xl">
          <div class="w-10 h-10 rounded-full overflow-hidden shrink-0">
            <img src="{{ asset('assets/img/avatar-2.png') }}" alt="avatar" class="w-full h-full object-cover">
          </div>

          <div>
            <p class="">
              Gokilll, Kak Alex udah kaya bang Eiichiro Oda. Seru banget belajar gambar bareng kak Alex. Sama-sama
              pengikut One Piece seruu bangettt!
            </p>
            <div class="flex justify-end mt-2">
              <img src="{{ asset('assets/icon/star.svg') }}" alt="" class="mr-2">
              5
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-end absolute right-0 -bottom-10">
        <div class="flex bg-white/50 backdrop-blur-2xl p-4 rounded-xl space-x-4 items-start w-10/12 shadow-2xl">
          <div class="w-10 h-10 rounded-full overflow-hidden shrink-0">
            <img src="{{ asset('assets/img/avatar-1.png') }}" alt="avatar" class="w-full h-full object-cover">
          </div>

          <div>
            <p class="">
              Kak Alex keren banget bisa gambar banyak model. Kakanya baik banget mau ngajarin aku ngegambar
              pelan-pelan
            </p>
            <div class="flex justify-end mt-2">
              <img src="{{ asset('assets/icon/star.svg') }}" alt="" class="mr-2">
              5
            </div>
          </div>
        </div>
      </div>
    </div>


    {{-- Card 3 --}}
    <div class="card rounded-2xl relative w-1/2 shrink-0">

      <h4 class="text-blue-600 mb-3"><span class="font-bold">Alexander -</span> Desain, Animasi</h4>
      <div class="w-8/12">
        <img src="{{ asset('assets/img/img-5.png') }}" alt="" class="rounded-2xl">
      </div>
      <div class="flex justify-end absolute right-0 bottom-28">
        <div class="flex bg-white/50 backdrop-blur-2xl p-4 rounded-xl space-x-4 items-start w-10/12 shadow-2xl">
          <div class="w-10 h-10 rounded-full overflow-hidden shrink-0">
            <img src="{{ asset('assets/img/avatar-2.png') }}" alt="avatar" class="w-full h-full object-cover">
          </div>

          <div>
            <p class="">
              Gokilll, Kak Alex udah kaya bang Eiichiro Oda. Seru banget belajar gambar bareng kak Alex. Sama-sama
              pengikut One Piece seruu bangettt!
            </p>
            <div class="flex justify-end mt-2">
              <img src="{{ asset('assets/icon/star.svg') }}" alt="" class="mr-2">
              5
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-end absolute right-0 -bottom-10">
        <div class="flex bg-white/50 backdrop-blur-2xl p-4 rounded-xl space-x-4 items-start w-10/12 shadow-2xl">
          <div class="w-10 h-10 rounded-full overflow-hidden shrink-0">
            <img src="{{ asset('assets/img/avatar-1.png') }}" alt="avatar" class="w-full h-full object-cover">
          </div>

          <div>
            <p class="">
              Kak Alex keren banget bisa gambar banyak model. Kakanya baik banget mau ngajarin aku ngegambar
              pelan-pelan
            </p>
            <div class="flex justify-end mt-2">
              <img src="{{ asset('assets/icon/star.svg') }}" alt="" class="mr-2">
              5
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  .scrollbar-hide::-webkit-scrollbar {
    display: none;
  }

  .scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>


<script>
  const sliderContainer = document.getElementById("review-sliderContainer");
  const leftBtn = document.getElementById("review-arrowLeft");
  const rightBtn = document.getElementById("review-arrowRight");

  // Ambil satu card sebagai referensi lebar slide
  const card = document.querySelector('.card');

  // Ambil jarak antar card dari gap-10 = 2.5rem = 40px
  const cardGap = 40;
  const slideWidth = card.offsetWidth + cardGap;

  leftBtn.addEventListener("click", () => {
    sliderContainer.scrollBy({
      left: -slideWidth,
      behavior: 'smooth'
    });
  });

  rightBtn.addEventListener("click", () => {
    sliderContainer.scrollBy({
      left: slideWidth,
      behavior: 'smooth'
    });
  });
</script>
