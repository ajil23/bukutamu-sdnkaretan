<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Tamu - SDN Karetan</title>

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="#" class="helpline-box">

          <div class="wrapper">
            <p class="helpline-title"></p>

            <p class="helpline-number"></p>
          </div>

        </a>

        <div class="logo">
          <h1 style="color: white;">SDN KARETAN</h1>
        </div>

        <div class="header-btn-group">

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="https://web.facebook.com/profile.php?id=100093686103781" target="_blank" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/sd_negeri_karetan?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="mailto:sdnkaretan1@gmail.com" target="_blank" class="social-link">
              <ion-icon name="mail-outline"></ion-icon>
            </a>
          </li>

        </ul>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="#" class="logo">
              <img src="./assets/images/logo-blue.svg" alt="Tourly logo">
            </a>

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <ul class="navbar-list">

            <li>
              <a href="#" class="navbar-link" data-nav-link>Utama</a>
            </li>

            <li>
              <a href="#bukutamu" class="navbar-link" data-nav-link>Buku tamu</a>
            </li>

          </ul>

        </nav>

        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login Admin</a>

             @endauth
        @endif

      </div>
    </div>

  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Selamat Datang di SDN Karetan</h2>

          <p class="hero-text">
            Sistem buku tamu digital di sekolah adalah sebuah aplikasi atau platform online yang digunakan untuk mencatat data pengunjung yang datang ke sekolah. Sistem ini menggantikan buku tamu tradisional yang menggunakan kertas dan pulpen.
          </p>

          <div class="btn-group">
            <a href="#bukutamu">
              <button class="btn btn-primary">Isi Buku Tamu</button>
            </a>
          </div>

        </div>
      </section>

      <!-- 
        - #BUKUTAMU
      -->

      <section class="cta" id="bukutamu">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">Buku Tamu</p>

            <h2 class="h2 section-title">Mohon isikan data diri anda ke dalam buku tamu kami.</h2>

            <p class="section-text">
              Dimohon untuk anda dapat mengisikan data diri anda dengan benar pada buku tamu kami agar memudahkan kami dalam melakukan rekapitulasi kehadiran tamu di sekolah kami.
            </p>
          </div>
        </div>
        <div class="container">

          <form method="POST" action="{{route('bukutamu.store')}}" class="tour-search-form">
            @csrf
            <div class="input-wrapper">
              <label for="namatamu" class="input-label">Nama</label>
              <input type="text" name="namatamu" id="namatamu" required placeholder="Tuliskan nama lengkap"
                class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="jabatantamu" class="input-label">Jabatan</label>
              <input type="text" name="jabatantamu" id="jabatantamu" required placeholder="Tuliskan jabatan anda" class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="tujuan" class="input-label">Tujuan</label>
              <input type="text" name="tujuan" id="tujuan" required class="input-field" placeholder="Tuliskan tujuan anda">
            </div>

            <div class="input-wrapper">
              <label for="tanggal" class="input-label">Tanggal</label>
              <input type="date" name="tanggal" id="tanggal" required class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">Simpan</button>

          </form>

        </div>
      </section>

    </article>
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/sdnkaretan-logo.svg" alt="logo">
          </a>

          <p class="footer-text">
            Sekolah Dasar Negeri Karetan terletak di Dusun Sidodadi Rt.05, Rw. 02, Kelurahan Karetan, Kecamatan Purwoharjo, Kabupaten Banyuwangi, Jawa Timur. Sekolah ini berdiri sejak tahun 1954 dan telah mendapatkan akreditas B.
          </p>

        </div>

        <div class="footer-contact">

          <h4 class="contact-title">Lebih Lanjut</h4>

          <p class="contact-text">
            Ketahui kami lebih lanjut.
          </p>

          <ul>

            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>

              <a href="https://maps.app.goo.gl/XbEA5E6ENqq7NY979" target="_blank">
              <address>Karetan, Banyuwangi - 68483</address>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-form">

          <p class="form-text">
            Anda dapat mencari kami dibeberapa sosial media dibawah ini.
          </p>

          <div class="form-wrapper">
            <a href="https://web.facebook.com/profile.php?id=100093686103781" target="_blank" class="btn btn-secondary">
              Facebook
            </a>
            <a href="mailto:sdnkaretan1@gmail.com" target="_blank" class="btn btn-secondary">
              Email
            </a>
          </div>
          

        </div>

      </div>
    </div>

  </footer>


  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>