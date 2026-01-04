@extends('index')

@section('content')

<section id="hero" class="hero section dark-background">
  <img src="{{ asset('assets/img/logo.png.jpg') }}" alt="Background" data-aos="fade-in">
  <div class="container text-center" data-aos="fade-up">
    <h2>Selamat Datang di Pesantren Al-Insan</h2>
    <p>Membentuk Generasi Qur'ani, Berakhlak Mulia, dan Unggul dalam Teknologi</p>
    <a href="#about" class="btn btn-primary" style="border-radius: 50px; padding: 10px 30px;">Pelajari Profil</a>
  </div>
</section>

<section id="what-we-do" class="section">
  <div class="container text-center">
    <h2 class="mt-5">Program & Keunggulan</h2>
    <p>Mencetak santri yang berwawasan luas.</p>
  </div>
</section>

@endsection