@extends('layouts.app')

@section('content')

  <section id="hero" class="hero section dark-background">
    <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">
    <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h2>Selamat Datang di Pesantren Al-Insan</h2>
          <p>Mencetak Generasi Robbani yang Unggul dalam Imtaq dan Iptek</p>
          <a href="{{ url('/daftar') }}" class="btn-get-started">Daftar Santri Baru</a>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about section">
    <div class="container" data-aos="fade-up">
       <div class="section-title">
          <h2>Tentang Al-Insan</h2>
          <p>Pesantren kami berfokus pada pendidikan akhlak, tahfidz, dan penguasaan teknologi modern.</p>
       </div>
    </div>
  </section>

@endsection