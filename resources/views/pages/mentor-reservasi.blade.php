@extends('layouts.user')
@section('content')
  <div class="flex mt-32 gap-20">
    <div class="flex-2">
      <section>
        <div class="bg-white shadow-xl rounded-2xl border border-gray-200 p-8">
          <header class="border-b border-gray-300 pb-3">
            <h2 class="font-bold text-2xl mb-2">Formulir reservasi</h2>
          </header>

          <form action="" class="mt-5">

            <div class="mb-4">
              <input type="text" class="focus:outline-0 py-2 px-3 rounded-lg w-full border-2 border-[#0065DB]"
                placeholder="Nama">
            </div>

            <div class="mb-4">
              <div class="flex items-center mt-5 space-x-3">
                <div class="bg-white rounded-xl border-gray-200 p-3 border">
                  <div class="flex items-center justify-center space-x-3">
                    <span class="font-bold text-[#0065DB]">Offline</span>
                    <iconify-icon icon="mingcute:location-2-fill" width="24" class="text-[#0065DB]"></iconify-icon>
                  </div>
                </div>

                <div class="bg-white rounded-xl border-gray-200 p-3 border">
                  <div class="flex items-center justify-center space-x-3">
                    <span class="font-bold text-[#0065DB]">Online</span>
                    <iconify-icon icon="fluent:people-chat-24-regular" width="24"
                      class="text-[#0065DB]"></iconify-icon>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <input type="text" class="focus:outline-0 py-2 px-3 rounded-lg w-full border-2 border-[#0065DB]"
                placeholder="Alamat (jika memilih offline)">
            </div>
            <div class="relative mb-4">
              <input id="dateInput" type="date"
                class="appearance-none focus:outline-0 py-2 px-3 pr-10 rounded-lg w-full border-2 border-[#0065DB]"
                placeholder="Pilih tanggal">

              <img id="calendarIcon" src="{{ asset('assets/icon/icon-calendar.png') }}" alt="calendar icon"
                class="w-5 h-5 absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer">
            </div>
            <div class="mb-4">
              <textarea name="" id="" cols="30" rows="6"
                class="focus:outline-0 py-2 px-3 rounded-lg w-full border-2 border-[#0065DB]" placeholder="Pesan saya"></textarea>
            </div>

            <div class="mb-4">
              <div class="flex items-center space-x-2">
                <input type="number" name="" id=""
                  class="w-40 ocus:outline-0 py-2 px-3 rounded-lg border-2 border-[#0065DB]" placeholder="Waktu / Jam">
                <div class="w-40 ocus:outline-0 py-2 px-3 rounded-lg border-2 border-[#0065DB] font-bold text-center">
                  Paket: 3 jam
                </div>
              </div>
            </div>

            <div class="flex">
              {{-- <button
                class="px-7 py-2 bg-[#0065DB] text-white font-bold rounded-lg hover:cursor-pointer">Selanjutnya</button> --}}
              <a href="/pembayaran"
                class="px-7 py-2 bg-[#0065DB] text-white font-bold rounded-lg hover:cursor-pointer">Selanjutnya</a>
            </div>
          </form>
        </div>
      </section>
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
