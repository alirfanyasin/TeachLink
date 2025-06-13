@extends('layouts.user')
@section('content')
  <div class="flex mt-32 gap-20">
    <div class="flex-2">
      <section>
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-gray-200">
          <header class="border-b border-gray-300 px-8 py-4 mb-3 bg-[#0065DB]">
            <h2 class="font-bold text-2xl mb-2 text-white">Sesi telah selesai</h2>
          </header>

          <div class="px-8 py-2">
            <p class="text-md font-regular">Bagaimana sesi belajar kamu?</p>
            <div class="flex items-center my-3 space-x-2">
              <img src="{{ asset('assets/icon/star.svg') }}" alt="" class="w-7">
              <img src="{{ asset('assets/icon/star.svg') }}" alt="" class="w-7">
              <img src="{{ asset('assets/icon/star.svg') }}" alt="" class="w-7">
              <img src="{{ asset('assets/icon/star.svg') }}" alt="" class="w-7">
              <img src="{{ asset('assets/icon/star.svg') }}" alt="" class="w-7">
            </div>
            <p class="text-md font-regular">Ceritakan pengalaman kamu dengan mentor ini:</p>

            <div class="my-4">
              <textarea name="" id="" cols="30" rows="6"
                class="focus:outline-0 py-2 px-3 rounded-lg w-full border-2 border-[#0065DB]" placeholder="Ulasan kamu"></textarea>
            </div>

            <div class="flex mb-8">
              <button class="px-7 py-2 bg-[#0065DB] text-white font-bold rounded-lg hover:cursor-pointer">Kirim
                Ulasan</button>
            </div>
          </div>

        </div>
      </section>
    </div>


    <section class="flex-1">
      <div class="bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer">
        <div class="overflow-hidden">
          <img src="{{ asset('assets/img/img-1.png') }}"
            class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110" alt="">
        </div>
        <div class="p-8 mt-3">
          <h4 class="font-bold text-2xl text-[#0065DB] mb-3">Deven Swara</h4>
          <p class="flex items-center"><img src="{{ asset('assets/icon/star.svg') }}" class="mr-2" alt="">
            5 (50 ulasan)</p>
          <div class="mb-3">
            <small class="text-gray-400">Tarif per jam:</small>
            <p class="text-[#0065DB] font-semibold text-xl">Rp 100,000/jam</p>
          </div>

          <div class="mb-3">
            <small class="text-gray-400">Jumlah murid:</small>
            <p class="text-[#0065DB] font-semibold text-xl">21+</p>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
@push('css')
  <style>
    /* Untuk Chrome */
    input[type="date"]::-webkit-calendar-picker-indicator {
      opacity: 0;
      display: none;
    }

    /* Untuk Firefox */
    input[type="date"]::-moz-calendar-picker-indicator {
      display: none;
    }

    /* Untuk Edge & lainnya (jika perlu) */
    input[type="date"]::-ms-clear,
    input[type="date"]::-ms-expand {
      display: none;
    }
  </style>
@endpush
@push('js')
  <script>
    const calendarIcon = document.getElementById('calendarIcon');
    const dateInput = document.getElementById('dateInput');

    calendarIcon.addEventListener('click', function() {
      dateInput.showPicker?.(); // modern browsers
      // fallback untuk browser lama
      dateInput.focus();
    });
  </script>
@endpush
