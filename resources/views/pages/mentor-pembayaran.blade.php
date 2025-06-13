@extends('layouts.user')
@section('content')
  <div class="flex mt-32 gap-20">
    <div class="flex-2">
      <section>
        <div class="bg-white shadow-xl rounded-2xl border border-gray-200 p-8">
          <header class="border-b border-gray-300 pb-3 mb-3">
            <h2 class="font-bold text-2xl mb-2">Pembayaran</h2>
          </header>

          <div class="text-gray-400 font-semibold flex items-center justify-between mb-2">
            <p class="">Subtotal</p>
            <p class="">Rp100,000</p>
          </div>

          <div class="text-gray-400 font-semibold flex items-center justify-between mb-2">
            <p class="">Biaya layanan</p>
            <p class="">Rp1,500</p>
          </div>

          <div class="text-[#0065DB] font-bold flex items-center text-2xl justify-between mb-2">
            <p class="">Total</p>
            <p class="">Rp1,500</p>
          </div>

          <hr class="border-b border-gray-300">

          <header class="py-3">
            <h2 class="font-bold text-2xl mb-2">Metode Pembayaran</h2>
          </header>

          <div class="flex items-center space-x-2">
            <div class="bg-[#40BE7A] rounded-xl border-gray-200 px-8 py-3 border hover:cursor-pointer">
              <div class="flex items-center justify-center space-x-3">
                <span class="font-bold text-white">Bank BCA</span>
              </div>
            </div>
            <div class="bg-white rounded-xl border-gray-200 px-8 py-3 border hover:cursor-pointer">
              <div class="flex items-center justify-center space-x-3">
                <span class="font-bold text-black">Bank BCA</span>
              </div>
            </div>
            <div class="bg-white rounded-xl border-gray-200 px-8 py-3 border hover:cursor-pointer">
              <div class="flex items-center justify-center space-x-3">
                <span class="font-bold text-black">Bank BCA</span>
              </div>
            </div>
          </div>

          <div class="mt-4 p-4 mb-3">
            <p class="font-bold text-[#0065DB]">Nomor Rekening : 0646443327</p>
            <p class="font-bold text-[#0065DB]">A.N TeachLink Grup Sentosa</p>
          </div>

          <div class="flex">

            <button onclick="modalOpen()"
              class="px-7 py-2 bg-[#0065DB] text-white font-bold rounded-lg hover:cursor-pointer">Kirim
              Permintaan</button>
          </div>
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
            <small class="text-gray-400">Jumlah murid:</small>
            <p class="text-[#0065DB] font-semibold text-xl">21+</p>
          </div>
        </div>
      </div>
    </section>
  </div>


  {{-- Modal Success --}}
  <div class="modal fixed inset-0 bg-white/40 backdrop-blur-2xl z-20 hidden">
    <div class="flex justify-center items-center h-screen">
      <div class="bg-white shadow-2xl border-2 border-gray-200 w-4/12 text-center p-8 rounded-2xl">
        <h1 class="font-bold text-3xl">Selamat!</h1>
        <p class="text-xl">Permintaan anda sedang diproseses</p>

        <img src="{{ asset('assets/icon/success.svg') }}" alt="" class="w-40 mx-auto my-5">

        <p class="font-bold text-xl">
          Silahkan menunggu verifikasi <br>
          oleh mentor
        </p>
      </div>
    </div>
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
@push('js')
  <script>
    function modalOpen() {
      const modal = document.querySelector('.modal');
      modal.classList.remove('hidden');

      // Tutup otomatis setelah 700ms (jika memang diinginkan)
      setTimeout(() => {
        modalClose();
        window.location.href = '/';
      }, 2000);

    }

    function modalClose() {
      const modal = document.querySelector('.modal');
      modal.classList.add('hidden');
    }
  </script>
@endpush
