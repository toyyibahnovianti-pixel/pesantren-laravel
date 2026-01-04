<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pesantren Al-Insan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FAVICON -->
  <link rel="icon" href="{{ asset('assets/img/logo.png.jpg') }}">
  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- BOOTSTRAP -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <style>
    body {
      font-family: 'Open Sans', sans-serif;
    }

    /* ===== NAVBAR ===== */
    header {
      background: #fff;
      box-shadow: 0 2px 15px rgba(0,0,0,0.08);
      padding: 15px 0;
    }

    .navmenu ul {
      list-style: none;
      display: flex;
      gap: 25px;
      margin: 0;
      padding: 0;
    }

    .navmenu ul li a {
      text-decoration: none;
      color: #333;
      font-weight: 600;
    }

    .navmenu ul li a:hover,
    .navmenu ul li a.active {
      color: #0d6efd;
    }

    /* ===== HERO ===== */
    #hero {
      position: relative;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
    }

    #hero img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 0;
    }

    #hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.65);
      z-index: 1;
    }

    #hero .container {
      position: relative;
      z-index: 2;
    }

    section {
      padding: 80px 0;
    }
  </style>
</head>

<body>

<!-- ===== HEADER ===== -->
<header>
  <div class="container d-flex align-items-center justify-content-between">

    <!-- LOGO -->
    <div class="d-flex align-items-center">
      <img src="{{ asset('assets/img/logo.png.jpg') }}" alt="Logo" height="50" class="me-2">
      <h4 class="m-0">Pesantren Al-Insan</h4>
    </div>

    <!-- NAVBAR (KESAMPING) -->
    <nav class="navmenu">
      <ul>
        <li><a href="#hero" class="active">Beranda</a></li>
        <li><a href="#profil">Profil</a></li>
        <li><a href="#program">Program</a></li>
        <li><a href="#tatatertib">Tata Tertib</a></li>
        <li><a href="#pengasuh">Pengasuh</a></li>
        <li><a href="#kontak">Kontak</a></li>
      </ul>
    </nav>

  </div>
</header>

<!-- ===== HERO ===== -->
<section id="hero">
  <img src="{{ asset('assets/img/background.pondok.jpg') }}" alt="Pondok Pesantren">
  <div class="container" data-aos="fade-up">
    <h1>Selamat Datang di Pesantren Al-Insan</h1>
    <p class="mt-3">Mencetak Generasi Qurani, Berakhlak Mulia & Berprestasi</p>
  </div>

</section>

<!-- ===== PROFIL ===== -->
<section id="profil">
  <div class="container text-center">
    <h2>Profil Pesantren</h2>
    <p>
      Pesantren Al-Insan adalah lembaga pendidikan Islam terpadu yang lahir dari semangat untuk melahirkan generasi tangguh di era modern. 
      Kami percaya bahwa pendidikan terbaik adalah yang menyeimbangkan antara kedalaman ilmu agama (Tafaqquh Fiddin) dengan penguasaan ilmu pengetahuan umum dan teknologi.
      Di sini, santri tidak hanya dididik untuk hafal Al-Qur'an dan memahami kitab turats, tetapi juga dibekali dengan kecakapan literasi digital dan kemandirian karakter.
    </p>
     <p>
        Dengan sistem pendidikan terpadu antara pesantren dan pendidikan formal,
        Pesantren Al-Insan berkomitmen mencetak generasi Qurani, mandiri,
        berakhlakul karimah, serta berprestasi.
    </p>

    <h4 class="mt-4">Visi</h4>
    <p>
        Terwujudnya generasi Islam yang berilmu, beriman, dan berakhlak mulia.
    </p>

    <h4>Misi</h4>
    <ul>
        <li>Menyelenggarakan pendidikan Al-Qur’an dan keislaman</li>
        <li>Membentuk karakter santri yang disiplin dan mandiri</li>
        <li>Mengembangkan potensi akademik dan spiritual santri</li>
    </ul>
    <footer class="text-center py-4 mt-5 bg-dark text-white">
    © 2026 Pesantren Al-Insan
   </footer>
  </div>
</section>

<!-- ===== PROGRAM ===== -->
<section id="program" class="bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2>Program Unggulan</h2>
      <p>Program pendidikan unggulan Pesantren Al-Insan</p>
    </div>

    <div class="row">

      <!-- PROGRAM 1 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow">
          <img src="{{ asset('assets/img/program tahfidz.jpg.jpg') }}" class="card-img-top" alt="Tahfidz Qur'an">
          <div class="card-body text-center">
            <h5 class="card-title">Tahfidz Al-Qur’an</h5>
            <p class="card-text">
              Program hafalan Al-Qur’an dengan metode terstruktur, dibimbing oleh ustadz berpengalaman
              serta pembinaan adab dan akhlak santri.
            </p>
          </div>
        </div>
      </div>

      <!-- PROGRAM 2 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow">
          <img src="{{ asset('assets/img/pendidikan diniyah.jpg.jpg') }}" class="card-img-top" alt="Madrasah Diniyah">
          <div class="card-body text-center">
            <h5 class="card-title">Madrasah Diniyah</h5>
            <p class="card-text">
              Pembelajaran kitab kuning dan ilmu keislaman klasik untuk membentuk santri
              yang berilmu dan berakhlakul karimah.
            </p>
          </div>
        </div>
      </div>

      <!-- PROGRAM 3 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow">
          <img src="{{ asset('assets/img/pendidikan formal.jpg.jpg') }}" class="card-img-top" alt="Pendidikan Formal">
          <div class="card-body text-center">
            <h5 class="card-title">Pendidikan Formal</h5>
            <p class="card-text">
              Pendidikan formal yang terintegrasi dengan kurikulum pesantren
              untuk mencetak santri berprestasi secara akademik dan spiritual.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ===== TATA TERTIB ===== -->
<section id="tatatertib">
  <div class="container text-center">
    <h2>Tata Tertib Santri</h2>
    <p>Menanamkan disiplin, tanggung jawab, dan akhlakul karimah</p>
  </div>
</section>

<!-- ===== PENGASUH ===== -->
<section id="pengasuh" class="bg-light">
  <div class="container text-center">
    <h2>Pengasuh & Asatidz</h2>
    <p>Dibimbing oleh tenaga pendidik berpengalaman</p>
  </div>
</section>

<!-- ===== KONTAK ===== -->
<section id="kontak" class="bg-light">
  <div class="container text-center">
    <h2>Pendaftaran Santri Baru</h2>
    <p class="mb-4">
      Pesantren Al-Insan membuka pendaftaran santri baru untuk tahun ajaran terbaru.
      Bergabunglah bersama kami untuk membentuk generasi Qurani, berakhlak mulia, dan berprestasi.
    </p>
    <a href="{{ url('/daftar-santri') }}" class="btn btn-primary btn-lg px-5 rounded-pill">
      Daftar Santri Sekarang
    </a>
    <p class="mt-3 text-muted">
      Informasi lebih lanjut hubungi: <br>
      📞 081935644561 | 📍 Al-Insan, Indonesia
    </p>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="text-center py-4 bg-dark text-white">
  <p class="mb-0">© 2026 Pesantren Al-Insan</p>
</footer>

<!-- JS -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script>AOS.init();</script>

</body>
</html>
