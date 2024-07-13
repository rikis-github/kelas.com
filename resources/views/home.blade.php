@extends('layout.app')

@section('content')
<div class="container">  
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid"> 
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo1.png') }}" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#benefit">Benefit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#paket">Paket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kelas">Kelas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kontak Kami</a>
          </li>
        </ul>
      </div>
      <div class="ms-lg-auto me-auto">
        <form class="d-flex">
          <button class="btn btn-primary me-2">Ajukan Demo</button>
          <button class="btn btn-outline-primary">Masuk</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="banner-section">
      <div class="banner-overlay"></div>
      <div class="banner-content">
        <h1>Tingkatkan Performa Bisnis Anda</h1>
        <p>Semua solusi untuk mempermudah Training dan Upskilling karyawan perusahaan Anda</p>
        <button class="btn btn-primary me-2 mt-5 w-50">Ajukan Demo</button>
      </div>
    </div>
    <div class="p-3 mb-2 bg-light text-dark">
      <h4 class="text-center mt-3" style="font-weight:900;">Telah Dipercaya oleh 10.000+ Profesional User dari</h4>
      <div class="row row-cols-8 mt-5 mx-5 ml-5 d-flex justify-content-center" id="partner-logo">
        <div class="col">
          <img height="50px" src="{{ asset('images/partner1.png') }}" alt="Partner">
        </div>
        <div class="col">
          <img height="50px" src="{{ asset('images/partner2.png') }}" alt="Partner">
        </div>
        <div class="col">
          <img height="40px" src="{{ asset('images/partner3.png') }}" alt="Partner">
        </div>
        <div class="col">
          <img height="50px" src="{{ asset('images/partner4.png') }}" alt="Partner">
        </div>
        <div class="col">
          <img height="50px" src="{{ asset('images/partner5.png') }}" alt="Partner">
        </div>
        <div class="col">
          <img height="50px" src="{{ asset('images/partner6.png') }}" alt="Partner">
        </div>
        <div class="col">
          <img height="50px" src="{{ asset('images/partner7.png') }}" alt="Partner">
        </div>
        <div class="col">
          <img height="50px" src="{{ asset('images/partner8.png') }}" alt="Partner">
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" id="benefit">
    <div class="row" style="margin-top:5em">
      <div class="text-center">
        <h4 style="font-weight:900;">Bagaimana Kelas Center Membantu Anda?</h4>
        <p>Kami menghadirkan platform pembelajaran yang komprehensif untuk memberdayakan karyawan Anda.Tingkatkan produktivitas dan efisiensi tim dengan Kelas Center.</p>
      </div>
      <ul class="nav justify-content-center mt-4">
        <li class="nav-item">
          <button class="btn btn-primary me-2 active" data-target="#lms">LMS</button>
        </li>
        <li class="nav-item">
          <button class="btn btn-outline-primary me-2" data-target="#featured">Featured</button>
        </li>
        <li class="nav-item">
          <button class="btn btn-outline-primary me-2" data-target="#video">Video Learning + Live Webinar</button>
        </li>
        <li class="nav-item">
          <button class="btn btn-outline-primary me-2" data-target="#inquiry">Inquiry Learning</button>
        </li>
      </ul>
      <div id="lms" class="content-section" style="display: block;">
        <div class="row">
          <div class="col-md-6">
            <h4 style="font-weight:900;">Optimalkan potensi karyawan Anda
            dengan Learning Management System (LMS)</h4>
            <p class="mt-5">Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!</p>
            <div class="p-3 mb-2 bg-light text-dark w-50">
              <img height="30px" src="{{ asset('images/check.svg') }}"></img> 
              Issued Certificate
            </div>
            <p>Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.</p>
            <div class="p-3 mb-2 bg-light text-dark w-50">
              <img height="30px" src="{{ asset('images/check.svg') }}"></img> 
              On Boarding
            </div>
            <p>Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung</p>
            <div class="p-3 mb-2 bg-light text-dark w-50">
              <img height="30px" src="{{ asset('images/check.svg') }}"></img> 
              Training on-demand
            </div>
            <p>Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda.</p>
          </div>
          <div class="col-md-6 justify-content-center">
            <img class="img-fluid rounded mx-auto d-block float-center" src="{{ asset('images/lms.jpg') }}"></img> 
          </div>
        </div>
      </div>

      <div id="featured" class="content-section">
        <h2>Featured Content</h2>
        <p>This is the content for Featured.</p>
      </div>

      <div id="video" class="content-section">
        <h2>Video Learning + Live Webinar Content</h2>
        <p>This is the content for Video Learning + Live Webinar.</p>
      </div>

      <div id="inquiry" class="content-section">
        <h2>Inquiry Learning Content</h2>
        <p>This is the content for Inquiry Learning.</p>
      </div>
    </div>
  </div>
  <div class="container-fluid" id="paket">
    <div class="row" style="margin-top:5em">
      <div class="text-center">
        <h4 style="font-weight:900;">Pilihan Paket Untuk Perusahaan di Kelas Center</h4>
      </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
      <div class="me-3">
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title" style="font-weight:900">
              <img height="40px" src="{{ asset('images/lamp.png') }}"></img>
              Starter
            </h5>
            <p class="card-text text-secondary">kelebihan</p>
            <div class="row">
              <div class="col-md-12">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">LMS + kelas by Kelas.Center</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Up to 5 users</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">No charge per user</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Up to 20 pilihan kelas</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Update pergantian kelas / 3 bulan</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Sertifikat</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Konsultasi Gratis</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Dedicated assistant</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Full support 7x24 jam</span>
              </div>
              <div class="dashed-line"></div>
              <span class="text-primary">Rp187.500</span>
              <h4>Rp159.000/bulan</h4>
              <button class="btn btn-info">Pilih Paket</button>
            </div>
          </div>
        </div>
      </div>
      <div class="me-3">
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title" style="font-weight:900">
              <img height="40px" src="{{ asset('images/user.png') }}"></img>
              Basic
            </h5>
            <p class="card-text text-secondary">kelebihan</p>
            <div class="row">
              <div class="col-md-12">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">LMS + kelas by Kelas.Center</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Up to 5 users</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">No charge per user</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Up to 20 pilihan kelas</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Update pergantian kelas / 3 bulan</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Sertifikat</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Konsultasi Gratis</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Dedicated assistant</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Full support 7x24 jam</span>
              </div>
              <div class="dashed-line"></div>
              <span class="text-primary">Rp187.500</span>
              <h4>Rp159.000/bulan</h4>
              <button class="btn btn-info">Pilih Paket</button>
            </div>
          </div>
        </div>
      </div>
      <div class="me-3">
        <div class="card text-dark mb-3" style="background-color:#E0EFF5;max-width: 18rem;">
        <div class="card-body">
            <h5 class="card-title" style="font-weight:900">
              <img height="40px" src="{{ asset('images/group.png') }}"></img>
              Pro
            </h5>
            <p class="card-text text-secondary">kelebihan</p>
            <div class="row">
              <div class="col-md-12">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">LMS + kelas by Kelas.Center</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Up to 5 users</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">No charge per user</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Up to 20 pilihan kelas</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Update pergantian kelas / 3 bulan</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Sertifikat</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Konsultasi Gratis</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Dedicated assistant</span>
              </div>
              <div class="col-md-12 mt-3">
                <img height="15px" src="{{ asset('images/check.png') }}"></img>
                <span class="card-text">Full support 7x24 jam</span>
              </div>
              <div class="dashed-line"></div>
              <span class="text-primary">Rp3.750.000</span>
              <h4>Rp2.900.000/bulan</h4>
              <button class="btn btn-info">Pilih Paket</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="card text-white mb-3 rounded-bottom border-top-0" style="margin-left:192px;max-width:69%;background-color:#C19D6C;border-radius: 0 0 50px 50px;">
        <div class="card-body">
          <div class="col-md-12">
            <img height="30px" src="{{ asset('images/company.png') }}"></img>
            <h5 class="d-inline ml-2" style="font-weight:900">Enterprise</h5>
            <img style='margin-left:20px' src="{{ asset('images/checks.png') }}"></img>
            <p class="d-inline"> >100 users </p>
            <img style='margin-left:5px' src="{{ asset('images/checks.png') }}"></img>
            <p class="d-inline"> All Access Class </p>
            <img style='margin-left:5px' src="{{ asset('images/checks.png') }}"></img>
            <p class="d-inline"> More Features </p>
            <button class="btn btn-light float-end" style="color:#C19D6C">Contact Us</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" id="kelas">
    <div class="row" style="margin-top:5em">
      <div class="text-center">
        <h4 style="font-weight:900;">Lebih dari 2000+ Learning Video</h4>
        <p>Kami juga sudah menyediakan banyak pelatihan yang beragam, pelatihan disusun dan dibuat oleh tim kurikulum profesional bersama tim video profesional untuk menghasilkan video dengan kualitas tinggi</p>
      </div>
      <ul class="nav justify-content-center mt-4">
        <li class="nav-item">
          <button class="btn btn-primary me-2 active" data-target="#lms">Kelas.com</button>
        </li>
        <li class="nav-item">
          <button class="btn btn-outline-primary me-2" data-target="#featured">Kelas.work</button>
        </li>
        <li class="nav-item">
          <button class="btn btn-outline-primary me-2" data-target="#video">Bootcamp</button>
        </li>
      </ul>
      <div id="lms" class="content-section" style="display: block;">
        <div class="row">
          <div class="col-md-3">
            <div class="card" style="border-radius:30px; width: 18rem;">
              <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY class="card-img-top""></iframe>  
              <div class="card-body">
                <span style="font-weight:900" class="card-title">Public Speaking : Merdeka Dalam Bicara</span>
                <p style="font-weight:700" class="card-text mt-4">Pandji Pragiwaksono</p>
                <span class="card-text">Presenter Televisi & Komika</span>
              </div>
            </div>  
          </div>
          <div class="col-md-3">
            <div class="card" style="border-radius:30px; width: 18rem;">
                <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY class="card-img-top""></iframe>  
                <div class="card-body">
                  <span style="font-weight:900" class="card-title">Public Speaking : Merdeka Dalam Bicara</span>
                  <p style="font-weight:700" class="card-text mt-4">Pandji Pragiwaksono</p>
                  <span class="card-text">Presenter Televisi & Komika</span>
                </div>
              </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="border-radius:30px; width: 18rem;">
              <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY class="card-img-top""></iframe>  
              <div class="card-body">
                <span style="font-weight:900" class="card-title">Public Speaking : Merdeka Dalam Bicara</span>
                <p style="font-weight:700" class="card-text mt-4">Pandji Pragiwaksono</p>
                <span class="card-text">Presenter Televisi & Komika</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="border-radius:30px; width: 18rem;">
              <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY class="card-img-top""></iframe>  
              <div class="card-body">
                <span style="font-weight:900" class="card-title">Public Speaking : Merdeka Dalam Bicara</span>
                <p style="font-weight:700" class="card-text mt-4">Pandji Pragiwaksono</p>
                <span class="card-text">Presenter Televisi & Komika</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="banner-quality">
      <div class="banner-quality-background"></div>
      <div class="banner-quality-content">
        <h1>Tingkatkan Kualitas Perusahaan Anda</h1>
        <p>Kami ingin membantu dan menunjukkan kepada Anda bagaimana Kelas corp dapat membantu dalam mengelola pelatihan dan membuat prosesnya lebih cepat dan lebih mudah.</p>
        <button class="btn btn-primary me-2 mt-5 w-50">Ajukan Demo</button>
      </div>
    </div>
    <footer class="bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img height="300" src="{{ asset('images/logo2.png') }}" alt="Logo">
          </div>
          <div class="col-md-3 mt-5">
            <h5>Company</h5>
            <p>Tentang Kami</p>
            <p>Ajukan Demo</p>
            <p>Kelas.work</p>
            <p>Kelas.com</p>
          </div>
          <div class="col-md-3 mt-5">
            <h5>Kebijakan</h5>
            <p>Kebijakan Privasi</p>
            <p>Syarat Ketentuan</p>
          </div>
          <div class="col-md-3 mt-5">
            <h5>Hubungi Kami</h5>
            <p>Email: Nabilla.Anggraini@kelas.com</p>
            <p>Whatsapp: +62 811 3366 763 (Nabilla Anggraini)</p>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    let buttons = document.querySelectorAll('.nav-item button')
    buttons.forEach(function(button) {
      button.addEventListener("click", function() {
        let target = button.getAttribute('data-target')
        let contentSections = document.querySelectorAll('.content-section')
        let navButtons = document.querySelectorAll('.nav-item button')
        navButtons.forEach(function(navButton) {
          if (navButton === button) {
            navButton.classList.add('active', 'btn-primary')
            navButton.classList.remove('btn-outline-primary')
          } else {
            navButton.classList.remove('active', 'btn-primary')
            navButton.classList.add('btn-outline-primary')
          }
        })
        contentSections.forEach(function(section) {
          section.style.display = "none"
        })
        let targetElement = document.querySelector(target)
        if (targetElement) {
          targetElement.style.display = "block"
        }
      })
    })
    let defaultContent = document.getElementById('lms')
    if (defaultContent) {
      defaultContent.style.display = "block"
    }
  })
</script>

@endsection
