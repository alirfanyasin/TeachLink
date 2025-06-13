<section id="testimoni" class="mt-32 mb-52">
  <header class="text-right mb-10">
    <h2 class="text-black font-bold text-3xl mb-3">AKAT (Apa KAta Tech-verse)</h2>
  </header>

  <div class="grid grid-cols-2 gap-10">
    <div class="">
      <img src="{{ asset('assets/img/mascot-2.png') }}" class="w-full" alt="Non Akademik">
    </div>

    <div>
      {{-- Slider Card --}}
      <div class="bg-white shadow-xl rounded-2xl p-10">
        <div class="w-24 h-24 rounded-full flex items-center space-x-4">
          <img src="{{ asset('assets/img/avatar-3.png') }}" alt="" class="w-full h-full">
          <h3 class="font-bold text-3xl text-black">Ananda Rahmawati</h3>
        </div>

        <h2 class="text-3xl font-bold mt-16">
          “Dengan jadwal yang padat, Techlink membantu saya dalam mengelola waktu dan belajar secara efektif.”
        </h2>

        <div class="flex mt-10 justify-star">
          <img src="{{ asset('assets/icon/star.svg') }}" alt="">
          <img src="{{ asset('assets/icon/star.svg') }}" alt="">
          <img src="{{ asset('assets/icon/star.svg') }}" alt="">
          <img src="{{ asset('assets/icon/star.svg') }}" alt="">
          <img src="{{ asset('assets/icon/star.svg') }}" alt="">
        </div>
      </div>


      {{-- Navigation --}}
      <div class="flex mt-5">
        <button id="arrowLeft" class="p-2 rounded-full bg-[#EFEFEF] hover:cursor-pointer mr-2 hover:bg-[#0065DB]">
          <img src="{{ asset('assets/icon/arrow-left.svg') }}" alt="">
        </button>
        <button id="arrowRight" class="p-2 rounded-full bg-[#EFEFEF] hover:cursor-pointer hover:bg-[#0065DB]">
          <img src="{{ asset('assets/icon/arrow-right.svg') }}" alt="">
        </button>
      </div>
    </div>
  </div>
</section>
