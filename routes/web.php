<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('pages.beranda', [
    'title' => 'Beranda'
  ]);
});


Route::get('/tentang-kami', function () {
  return view('pages.tentang-kami', [
    'title' => 'Tentang Kami'
  ]);
});

Route::get('/mentor', function () {
  return view('pages.mentor', [
    'title' => 'Mentor'
  ]);
});


Route::get('/profile', function () {
  return view('pages.user-profile', [
    'title' => 'Profile'
  ]);
});


Route::get('/pemesanan', function () {
  return view('pages.user-pemesanan', [
    'title' => 'Pemesanan'
  ]);
});


Route::get('/chat', function () {
  return view('pages.user-chat', [
    'title' => 'Chat'
  ]);
});



Route::get('/mentor-detail', function () {
  return view('pages.mentor-detail', [
    'title' => 'Mentor Detail'
  ]);
});


Route::get('/mentor-reservasi', function () {
  return view('pages.mentor-reservasi', [
    'title' => 'Reservasi Mentor'
  ]);
});


Route::get('/pembayaran', function () {
  return view('pages.mentor-pembayaran', [
    'title' => 'Pembayaran'
  ]);
});

Route::get('/mentor-review', function () {
  return view('pages.mentor-review', [
    'title' => 'Review Mentor'
  ]);
});

Route::get('/home-mentor', function () {
  return view('pages.home-mentor', [
    'title' => 'Review Mentor'
  ]);
});


Route::get('/mentor-registrasi', function () {
  return view('pages.mentor-registrasi', [
    'title' => 'Registrasi Mentor'
  ]);
});

Route::get('/mentor-registrasi-detail', function () {
  return view('pages.mentor-registrasi-detail', [
    'title' => 'Detail Registrasi Mentor'
  ]);
});



// Authentication Routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
