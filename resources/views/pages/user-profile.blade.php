@extends('layouts.user-dashboard')
@section('content')
  <section class="flex-1 flex flex-col">
    <!-- Profile Photo Section -->
    <div class="w-full mb-6">
      <div
        class="rounded-[25px] overflow-hidden border-[1.17px] border-solid border-[#0000001a] shadow-[0px_10.57px_125.01px_#3771c826] bg-white">
        <div class="p-[45px] text-center">
          <h2 class="font-bold text-[37.5px] text-[#3c3837] font-montserrat">
            Foto profil
          </h2>
        </div>
        <div class="relative flex justify-center pb-[98px]">
          <div class="relative w-[321px] h-[321px] bg-cover bg-center overflow-hidden"
            style="background-image: url('{{ asset('assets/img/mentor-profile.png') }}')"></div>
          <img
            class="absolute w-[79px] h-[79px] top-[-23px] right-[40px] object-cover cursor-pointer hover:scale-110 transition-transform"
            alt="Edit profile" src="{{ asset('assets/icon/icon-edit.png') }}" />
        </div>
      </div>
    </div>

    <!-- Profile Info Section -->
    <div class="mb-6">
      <div
        class="w-full max-w-[535px] rounded-[20px] border-[0.94px] border-[#0000001a] shadow-[0px_8.45px_100px_#3771c826] bg-white">
        <div class="flex flex-col items-center py-10 px-6">
          <h2 class="font-bold text-xl text-[#3c3837] font-montserrat mb-8">
            Ubah kata sandi
          </h2>

          <div class="w-full max-w-[283px]">
            <button
              class="w-full py-[11px] px-[15px] rounded-[10px] bg-[#006fff] text-white font-montserrat text-xl font-normal hover:bg-[#0056cc] transition-colors">
              Ubah kata sandi saya
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="flex-1">
    <div class="flex flex-col">
      <!-- Profile Actions -->
      <div class="w-full mb-6">
        <div
          class="w-full max-w-[811px] rounded-[20px] border-[0.94px] border-[#0000001a] shadow-[0px_8.45px_100px_#3771c826] bg-white">
          <div class="flex flex-col items-center">
            <h2 class="mt-9 mb-8 font-montserrat font-bold text-[#3c3837] text-3xl">
              Informasi Umum
            </h2>

            <div class="flex flex-col w-full max-w-[745px] items-start gap-5 px-8 pb-8">
              <!-- Nama -->
              <div
                class="flex flex-col items-start justify-center gap-[5px] px-[15px] py-[11px] w-full bg-white rounded-[10px] border border-solid border-[#cfcfcf] backdrop-blur-[8.1px]">
                <div
                  class="w-fit mt-[-1.00px] font-montserrat font-normal text-[#070707] text-[10px] leading-[13.3px] whitespace-nowrap">
                  Nama
                </div>
                <input type="text" value="Salsabilla Rahma"
                  class="w-full font-montserrat font-medium text-[#3c3837] text-[15px] leading-[normal] bg-transparent border-none outline-none" />
              </div>

              <!-- Email -->
              <div
                class="flex flex-col items-start justify-center gap-[5px] px-[15px] py-[11px] w-full bg-white rounded-[10px] border border-solid border-[#cfcfcf] backdrop-blur-[8.1px]">
                <div
                  class="w-fit mt-[-1.00px] font-montserrat font-normal text-[#070707] text-[10px] leading-[13.3px] whitespace-nowrap">
                  Email
                </div>
                <input type="email" value="Rahmasalsabilla@gmail.com"
                  class="w-full font-montserrat font-medium text-[#3c3837] text-[15px] leading-[normal] bg-transparent border-none outline-none" />
              </div>

              <!-- Jenis Kelamin -->
              <div
                class="flex flex-col items-start justify-center gap-[5px] px-[15px] py-[11px] w-full bg-white rounded-[10px] border border-solid border-[#cfcfcf] backdrop-blur-[8.1px]">
                <div
                  class="w-fit mt-[-1.00px] font-montserrat font-normal text-[#070707] text-[10px] leading-[13.3px] whitespace-nowrap">
                  Jenis Kelamin
                </div>
                <select
                  class="w-full font-montserrat font-medium text-[#3c3837] text-[15px] leading-[normal] bg-transparent border-none outline-none">
                  <option value="Perempuan" selected>Perempuan</option>
                  <option value="Laki-laki">Laki-laki</option>
                </select>
              </div>

              <!-- Pendidikan -->
              <div
                class="flex flex-col items-start justify-center gap-[5px] px-[15px] py-[11px] w-full bg-white rounded-[10px] border border-solid border-[#cfcfcf] backdrop-blur-[8.1px]">
                <div
                  class="w-fit mt-[-1.00px] font-montserrat font-normal text-[#070707] text-[10px] leading-[13.3px] whitespace-nowrap">
                  Pendidikan
                </div>
                <input type="text" value="Mahasiswa"
                  class="w-full font-montserrat font-medium text-[#3c3837] text-[15px] leading-[normal] bg-transparent border-none outline-none" />
              </div>

              <!-- Asal Kota -->
              <div
                class="flex flex-col items-start justify-center gap-[5px] px-[15px] py-[11px] w-full bg-white rounded-[10px] border border-solid border-[#cfcfcf] backdrop-blur-[8.1px]">
                <div
                  class="w-fit mt-[-1.00px] font-montserrat font-normal text-[#070707] text-[10px] leading-[13.3px] whitespace-nowrap">
                  Asal Kota
                </div>
                <input type="text" value="Surabaya, Ketintang"
                  class="w-full font-montserrat font-medium text-[#3c3837] text-[15px] leading-[normal] bg-transparent border-none outline-none" />
              </div>

              <button id="saveButton"
                class="w-fit px-[15px] py-[11px] bg-[#1877f2] rounded-[10px] border border-solid border-[#cfcfcf] hover:bg-[#166fe5] transition-colors cursor-pointer">
                <span class="font-montserrat font-bold text-white text-[15px] leading-[20.0px] whitespace-nowrap">
                  Simpan
                </span>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Address section -->
      <div>
        <div class="rounded-[20px] shadow-[0px_25px_36.3px_#3771c81a] overflow-hidden bg-white">
          <div class="bg-white rounded-t-[20px] p-5">
            <h2 class="text-center font-bold text-2xl text-[#3c3837] font-montserrat">
              Alamat
            </h2>
          </div>
          <div class="p-2 rounded-2xl overflow-hidden h-64">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3998.6023285066817!2d112.72634007504755!3d-7.311166492696745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd1cb925a1d%3A0x1dbecb0b2e9b059f!2sUniversitas%20Telkom%20Surabaya!5e1!3m2!1sid!2sid!4v1749538183355!5m2!1sid!2sid"
              style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
              class="w-full rounded-2xl h-full"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('js')
@endpush
