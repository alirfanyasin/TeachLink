@extends('layouts.user')
@section('hero')
  @include('sections.hero-section-home-page')
@endsection
@section('content')
  @include('sections.program-bimbingan')

  @include('sections.tipe-program')

  @include('sections.panduan-pemesanan-mentor')

  @include('sections.mentor-home-page')

  @include('sections.review-mentor-home-page')

  @include('sections.akat')

  @include('sections.banner-pendaftaran')

  @include('sections.kenapa-teachlink')
@endsection
@push('js')
  <script>
    navbar.classList.add('text-white')
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 300) {
        navbar.classList.add('bg-white', 'bg-opacity-90', 'shadow-md', 'text-black');
        navbar.classList.remove('text-white');
      } else {
        navbar.classList.remove('bg-white', 'bg-opacity-90', 'shadow-md', 'text-black');
        navbar.classList.add('text-white');
      }
    });
  </script>
@endpush
