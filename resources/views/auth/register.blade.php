@extends('layouts.auth')
@section('content')
  <form action="" class="w-full">
    <h2 class="text-4xl font-bold text-center">Selamat Datang <br> di TeachLink!</h2>
    <p class="text-center my-5">Pilih Tipe Akun Anda</p>

    <div class="flex items-center justify-center gap-2 mb-3">
      <button type="button" id="mahasiswaBtn"
        class="account-btn w-full border border-gray-600 flex items-center justify-between h-16 p-5 rounded-xl hover:cursor-pointer transition duration-200">
        <span>Mahasiswa</span>
        <div class="w-10">
          <img src="{{ asset('assets/icon/student.png') }}" alt="student icon" class="w-full">
        </div>
      </button>
      <button type="button" id="mentorBtn"
        class="account-btn w-full border border-gray-600 flex items-center justify-between h-16 p-5 rounded-xl hover:cursor-pointer transition duration-200">
        <span>Mentor</span>
        <div class="w-10">
          <img src="{{ asset('assets/icon/mentor.png') }}" alt="mentor icon" class="w-full">
        </div>
      </button>
    </div>

    <div class="mb-3">
      <input type="text" class="w-full px-4 py-2 border border-gray-600 rounded-lg" placeholder="Nama Lengkap">
    </div>

    <div class="mb-3">
      <input type="email" class="w-full px-4 py-2 border border-gray-600 rounded-lg" placeholder="Email">
    </div>

    <div class="mb-3">
      <input type="password" class="w-full px-4 py-2 border border-gray-600 rounded-lg" placeholder="Kata Sandi">
    </div>

    <div class="mb-3">
      <input type="password" class="w-full px-4 py-2 border border-gray-600 rounded-lg" placeholder="Ulangi Kata Sandi">
    </div>

    <div class="mb-3">
      <button type="button" onclick="setLoginSession()"
        class="bg-[#0061C1] text-white font-semibold text-center h-10 w-full rounded-lg shadow hover:cursor-pointer">Daftar</button>
    </div>

    <div class="text-center mb-3">Daftar</div>

    <div class="flex items-center justify-center gap-2 mb-3">
      <button type="button"
        class="w-full border border-gray-600 flex items-center justify-between h-10 p-5 rounded-xl hover:cursor-pointer">
        <iconify-icon icon="devicon:google" class="w-5 h-5"></iconify-icon>
        <small>Masuk dengan Google</small>
      </button>
      <button type="button"
        class="w-full border border-gray-600 flex items-center justify-between h-10 p-5 rounded-lg hover:cursor-pointer">
        <iconify-icon icon="logos:facebook" class="w-5 h-5"></iconify-icon>
        <small>Masuk dengan Facebook</small>
      </button>
    </div>
  </form>

  <style>
    .account-btn.active {
      border-color: #0061C1;
      border-width: 3px;
    }
  </style>

  <script>
    const mahasiswaBtn = document.getElementById('mahasiswaBtn');
    const mentorBtn = document.getElementById('mentorBtn');

    let selectedUserType = null;

    function resetButtons() {
      mahasiswaBtn.classList.remove('active');
      mentorBtn.classList.remove('active');
    }

    mahasiswaBtn.addEventListener('click', () => {
      resetButtons();
      mahasiswaBtn.classList.add('active');
      selectedUserType = 'mahasiswa';
    });

    mentorBtn.addEventListener('click', () => {
      resetButtons();
      mentorBtn.classList.add('active');
      selectedUserType = 'mentor';
    });

    function setLoginSession() {
      if (!selectedUserType) {
        alert('Silakan pilih tipe akun terlebih dahulu!');
        return;
      }

      localStorage.setItem('isLoggedIn', 'true');
      localStorage.setItem('userType', selectedUserType);

      if (selectedUserType === 'mahasiswa') {
        window.location.href = '/';
      } else if (selectedUserType === 'mentor') {
        window.location.href = '/home-mentor';
      }
    }
  </script>
@endsection
