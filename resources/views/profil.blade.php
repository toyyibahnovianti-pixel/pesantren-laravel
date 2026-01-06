<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>profil pesantren</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <style>
   body {
    margin: 0;
    font-family: 'Open Sans', sans-serif;
   }

   .profil-hero {
    min-height: 100vh;
    background: url('{{ asset('assets/img/background.pondok.jpg') }}') center/cover no-repeat;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #f7f7f7ff;
    text-align: center;
   }

   .profil-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(6, 6, 6, 0.65);
   }

   .profil-content {
    position: relative;
    z-index: 2;
    max-width: 900px;
    background: rgba(26, 24, 24, 0.55);
    padding: 40px;
    border-radius: 12px;
   }
  </style>
</head>
<body>
 <!-- HEADER -->
 <section class="profil-hero">
  <div class="profil-content">

  <h2 class="text-center mb-4">Profil Pesantren Al-Insan</h2>

  <p class="text-center mb-4">
    Pesantren Al-Insan merupakan lembaga pendidikan Islam yang berfokus pada
    pembinaan akhlak, pendalaman ilmu agama, serta pembentukan karakter santri
    yang disiplin dan mandiri.
  </p>

  <div class="row mt-4">
    <div class="col-md-6">
      <h5>Latar Belakang</h5>
      <p>
        Pesantren Al-Insan didirikan sebagai wujud kepedulian terhadap pentingnya
        pendidikan Islam yang seimbang antara ilmu agama, pembinaan akhlak,
        dan kesiapan santri menghadapi perkembangan zaman.
      </p>
    </div>

    <div class="col-md-6">
      <h5>Sistem Pendidikan</h5>
      <p>
        Sistem pendidikan di Pesantren Al-Insan mengintegrasikan pembelajaran
        keislaman, pembinaan karakter, serta pendidikan formal guna membentuk
        santri yang unggul secara spiritual dan intelektual.
      </p>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md-6">
      <h5>Lingkungan Pesantren</h5>
      <p>
        Lingkungan pesantren dibangun dengan suasana religius, disiplin, dan
        kondusif agar santri dapat belajar dan beribadah dengan nyaman.
      </p>
    </div>

    <div class="col-md-6">
      <h5>Komitmen Pendidikan</h5>
      <p>
        Pesantren Al-Insan berkomitmen mencetak generasi Qurani yang berakhlakul
        karimah serta mampu berperan aktif di tengah masyarakat.
      </p>
    </div>
  </div>
  <div class="text-center mt-5">
    <a href="{{ url('/') }}" class="btn btn-primary">
      Kembali ke Beranda
    </a>
  
  </div>
  </style>
</body>
</html>