@extends('layouts.user-dashboard')
@section('content')
  <div class="flex-1 flex flex-col">
    <section class="flex items-center space-x-2 justify-end mb-3">
      <div class="bg-white rounded-2xl w-52 p-5 h-32 border-gray-300 border-2 shadow-lg flex justify-between items-center">
        <div>
          <h1 class="font-bold text-[#0093FA] text-3xl">1</h1>
          <p class="font-light text-sm text-black">Jadwal Sesi</p>
        </div>
        <img src="{{ asset('assets/icon/calendar-gr-blue.svg') }}" alt="">
      </div>

      <div class="bg-white rounded-2xl w-52 p-5 h-32 border-gray-300 border-2 shadow-lg flex justify-between items-center">
        <div>
          <h1 class="font-bold text-[#0093FA] text-3xl">1</h1>
          <p class="font-light text-sm text-black">Verfikasi sesi kursus</p>
        </div>
        <img src="{{ asset('assets/icon/note-gr-blue.svg') }}" alt="">
      </div>
    </section>


    <section class="mb-10">
      <div class="bg-white shadow-2xl rounded-3xl p-8 border-gray-300 border-2">
        <h2 class="font-bold text-[#0093FA] text-xl mb-5">Pemesanan</h2>

        <table class="min-w-full table-auto  text-center border-gray-100 text-sm">
          <thead class="bg-gray-100 text-gray-700 border-y border-gray-200 text-center">
            <tr>
              <th class="px-4 py-3">No</th>
              <th class="px-4 py-3">Bidang</th>
              <th class="px-4 py-3">Guru / Mentor</th>
              <th class="px-4 py-3">Status</th>
              <th class="px-4 py-3">Tanggal</th>
            </tr>
          </thead>
          <tbody>
            <tr class="hover:bg-gray-50 border-y border-gray-200  hover:cursor-pointer" onclick="modalOpen()">
              <td class="px-4 py-3 font-light">01</td>
              <td class="px-4 py-3 font-light">Musik, Gitar</td>
              <td class="px-4 py-3 font-light">
                <div class="flex items-center justify-center space-x-2">
                  <div class="h-7 w-7 rounded-full overflow-hidden">
                    <img src="{{ asset('assets/img/mentor/01.png') }}" class="w-full h-full object-cover" alt="">
                  </div>
                  <span>Yudi Ariwibowo</span>
                </div>
              </td>
              <td class="px-4 py-3 text-green-600 font-semibold">Diterima</td>
              <td class="px-4 py-3 font-light">Jul 26, 2025</td>
            </tr>

            <tr class="hover:bg-gray-50 border-y border-gray-200  hover:cursor-pointer" onclick="modalOpen()">
              <td class="px-4 py-3 font-light">02</td>
              <td class="px-4 py-3 font-light">Musik, Gitar</td>
              <td class="px-4 py-3 font-light">
                <div class="flex items-center justify-center space-x-2">
                  <div class="h-7 w-7 rounded-full overflow-hidden">
                    <img src="{{ asset('assets/img/mentor/01.png') }}" class="w-full h-full object-cover" alt="">
                  </div>
                  <span>Yudi Ariwibowo</span>
                </div>
              </td>
              <td class="px-4 py-3 text-yellow-600 font-semibold">Menunggu Verifikasi</td>
              <td class="px-4 py-3 font-light">Jul 26, 2025</td>
            </tr>


            <tr class="hover:bg-gray-50 border-y border-gray-200  hover:cursor-pointer" onclick="modalOpen()">
              <td class="px-4 py-3 font-light">03</td>
              <td class="px-4 py-3 font-light">Musik, Gitar</td>
              <td class="px-4 py-3 font-light">
                <div class="flex items-center justify-center space-x-2">
                  <div class="h-7 w-7 rounded-full overflow-hidden">
                    <img src="{{ asset('assets/img/mentor/01.png') }}" class="w-full h-full object-cover" alt="">
                  </div>
                  <span>Yudi Ariwibowo</span>
                </div>
              </td>
              <td class="px-4 py-3 text-red-600 font-semibold">Ditolak</td>
              <td class="px-4 py-3 font-light">Jul 26, 2025</td>
            </tr>
          </tbody>
        </table>

        {{-- Footer Table --}}
        <div class="flex items-center justify-between mt-6">
          <p>Menampilkan 3 dari 10</p>
          <div class="flex items-center space-x-1">
            <a href=""
              class="bg-white rounded-md shadow-lg pb-1 border border-gray-200 w-32 h-9 flex justify-center items-center">
              Sebelumnya
            </a>

            <a href=""
              class="bg-white rounded-md shadow-lg pb-1 border border-gray-200 w-9 h-9 flex justify-center items-center">
              1
            </a>
            <a href=""
              class="bg-white rounded-md shadow-lg pb-1 border border-gray-200 w-9 h-9 flex justify-center items-center">
              2
            </a>
            <a href=""
              class="bg-white rounded-md shadow-lg pb-1 border border-gray-200 w-9 h-9 flex justify-center items-center">
              3
            </a>

            <a href=""
              class="bg-white rounded-md shadow-lg pb-1 border border-gray-200 w-32 h-9 flex justify-center items-center">
              Selanjutnya
            </a>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="bg-white shadow-2xl rounded-3xl p-8 border-gray-300 border-2">
        <h2 class="font-bold text-[#0093FA] text-xl mb-5">Riwayat Sesi</h2>

        <table class="min-w-full table-auto  text-center border-gray-100 text-sm">
          <thead class="bg-gray-100 text-gray-700 border-y border-gray-200 text-center">
            <tr>
              <th class="px-4 py-3">No</th>
              <th class="px-4 py-3">Bidang</th>
              <th class="px-4 py-3">Guru / Mentor</th>
              <th class="px-4 py-3">Status</th>
              <th class="px-4 py-3">Tanggal</th>
            </tr>
          </thead>
          <tbody>
            <tr class="hover:bg-gray-50 border-y border-gray-200">
              <td class="px-4 py-3 font-light">01</td>
              <td class="px-4 py-3 font-light">Musik, Gitar</td>
              <td class="px-4 py-3 font-light">
                <div class="flex items-center justify-center space-x-2">
                  <div class="h-7 w-7 rounded-full overflow-hidden">
                    <img src="{{ asset('assets/img/mentor/01.png') }}" class="w-full h-full object-cover" alt="">
                  </div>
                  <span>Yudi Ariwibowo</span>
                </div>
              </td>
              <td class="px-4 py-3 text-blue-600 font-semibold">Selesai</td>
              <td class="px-4 py-3 font-light">Jul 26, 2025</td>
            </tr>

            <tr class="hover:bg-gray-50 border-y border-gray-200 hover:cursor-pointer" onclick="redirectToPenilaian()">
              <td class="px-4 py-3 font-light">02</td>
              <td class="px-4 py-3 font-light">Musik, Gitar</td>
              <td class="px-4 py-3 font-light">
                <div class="flex items-center justify-center space-x-2">
                  <div class="h-7 w-7 rounded-full overflow-hidden">
                    <img src="{{ asset('assets/img/mentor/01.png') }}" class="w-full h-full object-cover" alt="">
                  </div>
                  <span>Yudi Ariwibowo</span>
                </div>
              </td>
              <td class="px-4 py-3 text-yellow-600 font-semibold">Beri Penilaian</td>
              <td class="px-4 py-3 font-light">Jul 26, 2025</td>
            </tr>


            <tr class="hover:bg-gray-50 border-y border-gray-200">
              <td class="px-4 py-3 font-light">03</td>
              <td class="px-4 py-3 font-light">Musik, Gitar</td>
              <td class="px-4 py-3 font-light">
                <div class="flex items-center justify-center space-x-2">
                  <div class="h-7 w-7 rounded-full overflow-hidden">
                    <img src="{{ asset('assets/img/mentor/01.png') }}" class="w-full h-full object-cover"
                      alt="">
                  </div>
                  <span>Yudi Ariwibowo</span>
                </div>
              </td>
              <td class="px-4 py-3 text-red-600 font-semibold">Dibatalkan</td>
              <td class="px-4 py-3 font-light">Jul 26, 2025</td>
            </tr>

            <tr class="hover:bg-gray-50 border-y border-gray-200">
              <td class="px-4 py-3 font-light">01</td>
              <td class="px-4 py-3 font-light">Musik, Gitar</td>
              <td class="px-4 py-3 font-light">
                <div class="flex items-center justify-center space-x-2">
                  <div class="h-7 w-7 rounded-full overflow-hidden">
                    <img src="{{ asset('assets/img/mentor/01.png') }}" class="w-full h-full object-cover"
                      alt="">
                  </div>
                  <span>Yudi Ariwibowo</span>
                </div>
              </td>
              <td class="px-4 py-3 text-blue-600 font-semibold">Selesai</td>
              <td class="px-4 py-3 font-light">Jul 26, 2025</td>
            </tr>

            <tr class="hover:bg-gray-50 border-y border-gray-200">
              <td class="px-4 py-3 font-light">01</td>
              <td class="px-4 py-3 font-light">Musik, Gitar</td>
              <td class="px-4 py-3 font-light">
                <div class="flex items-center justify-center space-x-2">
                  <div class="h-7 w-7 rounded-full overflow-hidden">
                    <img src="{{ asset('assets/img/mentor/01.png') }}" class="w-full h-full object-cover"
                      alt="">
                  </div>
                  <span>Yudi Ariwibowo</span>
                </div>
              </td>
              <td class="px-4 py-3 text-blue-600 font-semibold">Selesai</td>
              <td class="px-4 py-3 font-light">Jul 26, 2025</td>
            </tr>
          </tbody>
        </table>
        <div class="flex items-center justify-between mt-6">
          <p>Menampilkan 3 dari 10</p>
          <div class="flex items-center space-x-1">
            <a href=""
              class="bg-white rounded-md shadow-lg pb-1 border border-gray-200 w-32 h-9 flex justify-center items-center">
              Sebelumnya
            </a>

            <a href=""
              class="bg-white rounded-md shadow-lg pb-1 border border-gray-200 w-9 h-9 flex justify-center items-center">
              1
            </a>
            <a href=""
              class="bg-white rounded-md shadow-lg pb-1 border border-gray-200 w-9 h-9 flex justify-center items-center">
              2
            </a>
            <a href=""
              class="bg-white rounded-md shadow-lg pb-1 border border-gray-200 w-9 h-9 flex justify-center items-center">
              3
            </a>

            <a href=""
              class="bg-white rounded-md shadow-lg pb-1 border border-gray-200 w-32 h-9 flex justify-center items-center">
              Selanjutnya
            </a>
          </div>
        </div>
      </div>
    </section>


  </div>


  {{-- Modal Detail Pemesanan --}}
  <div class="modal fixed inset-0 bg-white/40 backdrop-blur-2xl z-20 hidden">
    <div class="flex justify-center items-center h-screen">
      <div class="bg-white shadow-2xl border-2 border-gray-200 w-6/12 p-8 rounded-2xl flex gap-4 relative">

        {{-- Close icon --}}
        <button onclick="modalClose()" class="absolute top-3 right-3 text-red-600 hover:cursor-pointer">
          <iconify-icon icon="stash:times" width="30"></iconify-icon>
        </button>

        <div class="flex-2">
          <h2 class="font-bold text-3xl text-black">Belajar Gitar</h2>

          <div class="bg-[#5D9EFF]/15 px-3 py-2 rounded-lg w-full my-4 flex items-center">
            <div class="flex space-x-2 items-center">
              <img src="{{ asset('assets/icon/location-blue.png') }}" alt="" width="16">
              <p class="font-light">Ketintang Permai A-10 </p>
            </div>
            <span class="mx-3">|</span>
            <div class="flex space-x-2 items-center">
              <img src="{{ asset('assets/icon/icon-calendar.png') }}" alt="" width="16">
              <p class="font-light">26 Mei 2025</p>
            </div>
          </div>

          <table>
            <tr>
              <td class="pr-5">
                <div class="flex space-x-2 items-center">
                  <img src="{{ asset('assets/icon/duration.png') }}" alt="" width="16">
                  <span class="font-light">Durasi</span>
                </div>
              </td>
              <td class="px-3">:</td>
              <td class="font-light">3 jam</td>
            </tr>
            <tr>
              <td class="pr-5">
                <div class="flex space-x-2 items-center">
                  <img src="{{ asset('assets/icon/timer.png') }}" alt="" width="16">
                  <span class="font-light">Waktu</span>
                </div>
              </td>
              <td class="px-3">:</td>
              <td class="font-light">09.00 - 12.00 WIB</td>
            </tr>
            <tr>
              <td class="pr-5">
                <div class="flex space-x-2 items-center">
                  <img src="{{ asset('assets/icon/note-blue.png') }}" alt="" width="16">
                  <span class="font-light">Status</span>
                </div>
              </td>
              <td class="px-3">:</td>
              <td class="font-semibold text-[#DE9A3C]">Menunggu verifikasi mentor</td>
            </tr>
          </table>

          <div class="w-full mt-4">
            <textarea name="" id="" cols="30" rows="7"
              class="w-full rounded-xl border-2 border-blue-400 p-2 font-light">Mau belajar teknik gitar fingerstyle pakai gitar listrik buat lagu symphoni metalica No.40  
            </textarea>
          </div>


        </div>

        <div class="flex-1">
          <div class="bg-white shadow-xl rounded-2xl overflow-hidden group cursor-pointer">
            <div class="overflow-hidden">
              <img src="{{ asset('assets/img/img-1.png') }}"
                class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110"
                alt="">
            </div>
            <div class="p-4">
              <h4 class="font-bold text-xl text-[#0065DB] mb-3">Kevin Merco</h4>
              <p class="flex items-center text-md"><img src="{{ asset('assets/icon/star.svg') }}" class="mr-2"
                  alt="">
                <span class="text-sm">5 (50 ulasan)</span>
              </p>
              <div class="mb-3">
                <small class="text-gray-400">Tarif per jam:</small>
                <p class="text-[#0065DB] font-semibold text-md">Rp 100,000/jam</p>
              </div>

              <div class="mb-3">
                <small class="text-gray-400">Jumlah murid:</small>
                <p class="text-[#0065DB] font-semibold text-md">21+</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('js')
  <script>
    function modalOpen() {
      const modal = document.querySelector('.modal');
      modal.classList.remove('hidden');

      // Tutup otomatis setelah 700ms (jika memang diinginkan)
      // setTimeout(() => {
      //   modalClose();
      //   window.location.href = '/home-mentor';
      // }, 2000);

    }

    function modalClose() {
      const modal = document.querySelector('.modal');
      modal.classList.add('hidden');
    }

    function redirectToPenilaian() {
      window.location.href = '/mentor-review';
    }
  </script>
@endpush
