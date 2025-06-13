@extends('layouts.user')
@section('content')
  <div class="w-full">
    <section class="mt-40 mb-10">
      <h1 class="font-bold text-center text-4xl">
        <div class="text-2xl">Tuliskan</div>
        <div class="text-[#0065DB]">Judul Kursus Anda</div>
      </h1>
    </section>

    <div class="w-8/12 mx-auto  py-2 flex gap-5 justify-center">
      <div class="py-2 flex-1">
        <div class="rounded-xl bg-[#D0E6FF] p-4 mb-20">
          <header class="flex items-center space-x-3 mb-4">
            <img src="{{ asset('assets/icon/info.png') }}" alt="" class="w-5">
            <h5 class="font-bold">Informasi penting</h5>
          </header>
          <div>
            <p class="font-light">Judul Anda adalah kunci dari iklan mengajar Anda! Mohon diperhatikan dengan baik! Tidak
              perlu menyantumkan
              tarif kursus Anda karena tarif kursus Anda akan muncul di bagian lain. Iklan mengajar Anda haruslah unik,
              menarik perhatian dan terdiri dari setidaknya terdiri dari 12 kata, antara lain:</p>
            <ul>
              <li>Subjek yang Anda ajar</li>
              <li>Tingkat yang Anda ajar</li>
              <li>Lokasi kursus</li>
              <li>Kualifikasi, pengalaman, dll.</li>
            </ul>
          </div>
        </div>

        <div class="rounded-xl bg-[#D0E6FF] p-4 mb-5">
          <header class="flex items-center space-x-3 mb-4">
            <img src="{{ asset('assets/icon/info.png') }}" alt="" class="w-5">
            <h5 class="font-bold">Informasi penting</h5>
          </header>
          <div>
            <p class="font-light">Bagian 1: <br>Bangun kepercayaan diri serta kredibilitasi Anda. Yakinkan para murid
              dengan profesionalisme Anda. <br>
              Jelaskan pengalaman anda dalam bidang yang akan anda ajar. Anda bisa mencamtumkan keahlian anda dalam bidang
              tersebut:</p>
            <ul>
              <li>Subjek yang Anda ajar</li>
              <li>Tingkat yang Anda ajar</li>
              <li>Lokasi kursus</li>
              <li>Kualifikasi, pengalaman, dll.</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="py-2 flex-2">
        <textarea name="" id="" cols="20" rows="10"
          class="w-full border-2 border-gray-300 p-3 rounded-2xl"
          placeholder="Contoh 1: Belajar menggambar hampir apa saja dalam waktu singkat! Kembangkan talenta yang kamu punya!"></textarea>


        <div class="mt-10">
          <h2 class="font-bold text-center text-3xl mb-5">Tuliskan Tentang diri anda di bidang ini</h2>
          <textarea name="" id="" cols="20" rows="10"
            class="w-full border-2 border-gray-300 p-3 rounded-2xl"
            placeholder="Contoh 1: Belajar menggambar hampir apa saja dalam waktu singkat! Kembangkan talenta yang kamu punya!"></textarea>
        </div>

        <div class="mt-10">
          <h2 class="font-bold text-center text-3xl mb-5">Tuliskan Tentang Kursus anda</h2>
          <textarea name="" id="" cols="20" rows="10"
            class="w-full border-2 border-gray-300 p-3 rounded-2xl"
            placeholder="Contoh 1: Belajar menggambar hampir apa saja dalam waktu singkat! Kembangkan talenta yang kamu punya!"></textarea>
        </div>


        <div class="mt-10">
          <h2 class="font-bold text-center text-3xl mb-5">Tambahkan foto pengalaman anda</h2>
          <div class="flex justify-center items-center gap-5">
            <div class="h-14 w-32 rounded-xl bg-gray-200 flex justify-center items-center">
              <iconify-icon icon="majesticons:plus" width="24px"></iconify-icon>
            </div>
            <div class="h-14 w-32 rounded-xl bg-gray-200 flex justify-center items-center">
              <iconify-icon icon="majesticons:plus" width="24px"></iconify-icon>
            </div>
            <div class="h-14 w-32 rounded-xl bg-gray-200 flex justify-center items-center">
              <iconify-icon icon="majesticons:plus" width="24px"></iconify-icon>
            </div>
          </div>
        </div>

        <div class="mt-20">
          <h2 class="font-bold text-center text-3xl mb-5">Silahkan unggah dokumen yang dibutuhkan</h2>
          <div class="flex flex-col gap-5">
            <div class="h-14 w-full rounded-xl bg-[#0065DB] text-white flex px-5 justify-between items-center">
              <h4 class="font-bold">Foto KTP</h4>
              <iconify-icon icon="material-symbols:check-box-rounded" width="24px"></iconify-icon>
            </div>
            <div class="h-14 w-full rounded-xl bg-gray-200 flex px-5 justify-between items-center">
              <h4 class="font-bold">Ijazah Guru/Profesional</h4>
              <iconify-icon icon="majesticons:plus" width="24px"></iconify-icon>
            </div>
            <div class="h-14 w-full rounded-xl bg-gray-200 flex px-5 justify-between items-center">
              <h4 class="font-bold">Curriculum Vitae/Portofolio</h4>
              <iconify-icon icon="majesticons:plus" width="24px"></iconify-icon>
            </div>
            <div class="h-14 w-full rounded-xl bg-gray-200 flex px-5 justify-between items-center">
              <h4 class="font-bold">Sertifikat (Bila ada)</h4>
              <iconify-icon icon="majesticons:plus" width="24px"></iconify-icon>
            </div>
            <div class="h-14 w-full rounded-xl bg-gray-200 flex px-5 justify-between items-center">
              <h4 class="font-bold">Dokumen tambahan (Bila ada)</h4>
              <iconify-icon icon="majesticons:plus" width="24px"></iconify-icon>
            </div>
          </div>
        </div>

        <div class="mt-20">
          <h2 class="font-bold text-center text-3xl mb-5">Kasih tahu benefit kursus anda</h2>
          <div class="">
            <div class="h-10 w-full rounded-xl flex justify-start space-x-2 items-center">
              <img src="{{ asset('assets/icon/icon-checklist.svg') }}" alt="" width="20">
              <h4 class="text-gray-500">Jago ngobrol pakai bahasa inggris dalam sehari!</h4>
            </div>

            <div class="h-10 w-full rounded-xl flex justify-start space-x-2 items-center">
              <img src="{{ asset('assets/icon/icon-checklist.svg') }}" alt="" width="20">
              <h4 class="text-gray-500">Jago presentasi pakai bahasa inggris!</h4>
            </div>

            <div class="h-10 w-full rounded-xl flex justify-start space-x-2 items-center">
              <img src="{{ asset('assets/icon/icon-checklist.svg') }}" alt="" width="20">
              <h4 class="text-gray-500">Jago ngobrol pakai bahasa inggris dalam sehari!</h4>
            </div>
          </div>
        </div>


        <div class="mt-10 flex justify-center">
          <button onclick="modalOpen()"
            class="bg-[#0052B4] text-white rounded-full px-3 py-2 flex items-center hover:cursor-pointer justify-between w-50">
            <span class="text-lg mr-3 ml-5">Selanjutnya</span>
            <img src="{{ asset('assets/icon/arrow-right.svg') }}" alt="">
          </button>
        </div>
      </div>
    </div>
  </div>



  {{-- Modal Success --}}
  <div class="modal fixed inset-0 bg-white/40 backdrop-blur-2xl z-20 hidden">
    <div class="flex justify-center items-center min-h-screen">
      <div class="bg-white shadow-2xl border-2 border-gray-200 w-11/12 md:w-6/12 lg:w-4/12 text-center p-8 rounded-2xl">
        <h1 class="font-bold text-3xl">Selamat!</h1>
        <p class="text-xl">Pendaftaran andas sedang diproses</p>

        <img src="{{ asset('assets/icon/success.svg') }}" alt="" class="w-40 mx-auto my-5">

        <p class="font-bold text-xl">
          Silahkan menunggu verifikasi <br>
          oleh admin
        </p>
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
      setTimeout(() => {
        modalClose();
        window.location.href = '/home-mentor';
      }, 2000);

    }

    function modalClose() {
      const modal = document.querySelector('.modal');
      modal.classList.add('hidden');
    }
  </script>
@endpush
