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
      <div id="selectedAddItem">

      </div>
    </section>

    <section class="mt-5">
      <p class="mb-3">Tambahkan bidang terkait:</p>
      <div class="bg-white p-6 rounded-2xl border-2 border-gray-300 shadow-2xl h-[400px] overflow-y-auto">
        <div class="max-w-xl mx-auto bg-white rounded-lg mb-2">
          <button id="item-btn"
            class="item-button bg-[#E3F0FF] hover:cursor-pointer rounded-lg p-3 text-left w-full flex justify-between items-center focus:outline-none">
            <h2 class="text-lg font-bold">Melukis</h2>
            <div class="text-black font-bold">
              <iconify-icon icon="picon:plus" width="30"></iconify-icon>
            </div>
          </button>
        </div>
        <div class="max-w-xl mx-auto bg-white rounded-lg mb-2">
          <button id="item-btn"
            class="item-button bg-[#E3F0FF] hover:cursor-pointer rounded-lg p-3 text-left w-full flex justify-between items-center focus:outline-none">
            <h2 class="text-lg font-bold">Kaligrafi</h2>
            <div class="text-black font-bold">
              <iconify-icon icon="picon:plus" width="30"></iconify-icon>
            </div>
          </button>
        </div>
        <div class="max-w-xl mx-auto bg-white rounded-lg mb-2">
          <button id="item-btn"
            class="item-button bg-[#E3F0FF] hover:cursor-pointer rounded-lg p-3 text-left w-full flex justify-between items-center focus:outline-none">
            <h2 class="text-lg font-bold">Komik/Manga</h2>
            <div class="text-black font-bold">
              <iconify-icon icon="picon:plus" width="30"></iconify-icon>
            </div>
          </button>
        </div>
        <div class="max-w-xl mx-auto bg-white rounded-lg mb-2">
          <button id="item-btn"
            class="item-button bg-[#E3F0FF] hover:cursor-pointer rounded-lg p-3 text-left w-full flex justify-between items-center focus:outline-none">
            <h2 class="text-lg font-bold">Airbrush</h2>
            <div class="text-black font-bold">
              <iconify-icon icon="picon:plus" width="30"></iconify-icon>
            </div>
          </button>
        </div>

        <div class="max-w-xl mx-auto bg-white rounded-lg mb-2">
          <button id="item-btn"
            class="item-button bg-[#E3F0FF] hover:cursor-pointer rounded-lg p-3 text-left w-full flex justify-between items-center focus:outline-none">
            <h2 class="text-lg font-bold">Graffiti</h2>
            <div class="text-black font-bold">
              <iconify-icon icon="picon:plus" width="30"></iconify-icon>
            </div>
          </button>
        </div>
        <div class="max-w-xl mx-auto bg-white rounded-lg mb-2">
          <button id="item-btn"
            class="item-button bg-[#E3F0FF] hover:cursor-pointer rounded-lg p-3 text-left w-full flex justify-between items-center focus:outline-none">
            <h2 class="text-lg font-bold">Animasi</h2>
            <div class="text-black font-bold">
              <iconify-icon icon="picon:plus" width="30"></iconify-icon>
            </div>
          </button>
        </div>
        <div class="max-w-xl mx-auto bg-white rounded-lg mb-2">
          <button id="item-btn"
            class="item-button bg-[#E3F0FF] hover:cursor-pointer rounded-lg p-3 text-left w-full flex justify-between items-center focus:outline-none">
            <h2 class="text-lg font-bold">Seni Digital</h2>
            <div class="text-black font-bold">
              <iconify-icon icon="picon:plus" width="30"></iconify-icon>
            </div>
          </button>
        </div>
      </div>


      <div class="mt-16 flex justify-center">
        <a href="/mentor-registrasi-detail"
          class="bg-[#0052B4] text-white rounded-full px-3 py-3 flex items-center justify-between w-52">
          <span class="text-lg mr-3 ml-5">Selanjutnya</span>
          <img src="{{ asset('assets/icon/arrow-right.svg') }}" alt="">
        </a>
      </div>
    </section>
  </div>
@endsection
@push('js')
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const buttons = document.querySelectorAll('.item-button');
      const selectedContainer = document.getElementById('selectedAddItem');

      buttons.forEach(button => {
        button.addEventListener('click', function() {
          const itemName = this.querySelector('h2').innerText.trim();

          // Cek apakah sudah ada
          const isAlreadyAdded = Array.from(selectedContainer.children).some(child => {
            return child.querySelector('span')?.innerText.trim() === itemName;
          });

          if (!isAlreadyAdded) {
            const newItem = document.createElement('div');
            newItem.className =
              'flex items-center gap-2 bg-[#0065DB] text-white font-semibold py-3 px-4 rounded-lg mb-2';

            newItem.innerHTML = `
            <iconify-icon icon="material-symbols:check-box-rounded" width="24" class="text-white"></iconify-icon>
            <span>${itemName}</span>
          `;

            selectedContainer.prepend(newItem);
          }
        });
      });
    });
  </script>
@endpush
