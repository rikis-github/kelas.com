<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Kelas.com') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Slick Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <!-- jQuery (optional) -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style>
      html{
        font-family: Arial, sans-serif; /* Ganti dengan jenis huruf yang Anda inginkan */
        font-size: 16px; /* Sesuaikan ukuran font sesuai kebutuhan */
        line-height: 1; /* Jarak antara baris */
        /* letter-spacing: 0.0em; Jarak antar huruf */
        word-spacing: 0.1em; /* Jarak antar kata */
        text-align: justify; /* Penyusunan teks rata kiri dan kanan */
        /* text-indent: 20px; Indentasi awal paragraf */
        text-transform: none; /* Merubah teks uppercase menjadi lowercase */
      }
      .navbar {
        background-color: #ffffff; /* Ubah warna latar belakang sesuai keinginan */
        box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Tambahkan bayangan halus untuk navbar */
      }

      .navbar-brand img {
        max-height: 40px; /* Atur tinggi maksimum logo */
      }

      .navbar-nav .nav-link {
        color: #333; /* Ubah warna teks link */
      }

      .navbar-nav .nav-link.active {
        font-weight: bold; /* Tambahkan gaya tebal untuk link aktif */
      }
      .content-section {
        display: none;
        padding: 20px;
        margin-top: 20px;
        /* background-color: #f0f0f0; */
      }
      
      .btn-primary {
        background-color: #C19D6C;
        border-color: #C19D6C;
        color: white; /* Warna teks */
      }

      .btn-primary:hover {
        background-color: #a08856;
        border-color: #a08856;
      }

      .btn-primary:focus,
      .btn-primary.focus {
        box-shadow: 0 0 0 0.25rem rgba(193, 157, 108, 0.5);
      }

      .btn-outline-primary {
        color: #C19D6C;
        border-color: #C19D6C;
      }

      .btn-outline-primary:hover {
        color: #a08856;
        background-color: transparent;
        border-color: #a08856;
      }

      .btn-outline-primary:focus,
      .btn-outline-primary.focus {
        box-shadow: 0 0 0 0.25rem rgba(193, 157, 108, 0.5);
      }

      .btn-check:checked+.btn, .btn.active, .btn.show, .btn:first-child:active, :not(.btn-check)+.btn:active{
        color: white;
        background-color: #C19D6C;
        border-color: #C19D6C;
      }

      .banner-section {
        background-image: url('{{ asset('images/banner.png') }}');
        background-size: cover;
        height: 600px;
        position: relative;
        overflow: hidden; /* Mengatur overflow agar lapisan gelap tidak terlalu besar */
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .banner-overlay {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Warna gelap dengan opacity 0.5 */
        z-index: 3; /* Mengatur z-index agar lapisan gelap berada di atas gambar */
      }

      .banner-content {
        text-align: center;
        z-index: 3; /* Mengatur z-index agar teks berada di atas lapisan gelap */
      }

      .banner-content h1 {
        color: white; /* Warna teks */
      }

      .banner-content p {
        color: white; /* Warna teks */
      }

      .banner-quality {
          width: 100%; /* Lebar tetap */
          height: 304px; /* Tinggi sesuai dengan hug */
          padding: 64px; /* Padding 64px */
          margin: 0 auto; /* Untuk memusatkan konten */
          position: relative; /* Untuk posisi yang tepat */
          overflow: hidden; /* Untuk memastikan konten tetap dalam batas */
      }

      .banner-quality-background {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-image: url('{{ asset('images/img2.png') }}'); /* Ganti dengan path gambar Anda */
          background-size: cover;
          background-color: #EEE5D8; /* Warna latar belakang */
          filter: blur(20px); /* Efek blur pada latar belakang */
          z-index: -1; /* Z-index agar berada di belakang konten */
      }

      .banner-quality-content {
          text-align: center;
          z-index: 1; /* Z-index untuk konten teks */
      }

      .banner-quality-content h1 {
          color: black; /* Warna teks untuk judul */
      }

      .banner-quality-content p {
          color: black; /* Warna teks untuk paragraf */
      }

      .dashed-line {
        border-top: 2px dashed #8A8A8A;
        width: 80%;
        margin: 20px 20px 20px 20px;
      }
      footer {
        background-color: #000000; /* Warna latar belakang hitam */
        color: #ffffff; /* Warna teks putih */
      }
    </style>
</head>
<body>
  <div id="app">
    @yield('content')
  </div>
</body>
</html>
