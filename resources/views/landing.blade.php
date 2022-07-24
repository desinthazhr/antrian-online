<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="css/landing.css">

  <title>Bengkel Sehat</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#">
      <img src="../img/logo-bengkel.png" alt="" width="180" height="50" class="d-inline-block align-text-top">
      <!-- <p>AUTO SERVICE SEHAT</p> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-item nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-item nav-link" href="/pengunjung-liveAntrian">Live Antrian</a>
        <a class="nav-item nav-link" href="#tutorial">Tutorial</a>
        <a class="nav-item nav-link" href="#galeri">Galeri</a>
        <a class="nav-item nav-link" href="#kontak">Kontak</a>
      </div>
    </div>
    </div>
  </nav>
  <!-- Akhir navbar -->


  <!-- Jumbotron -->
  <div class="jumbotron">
    <div class="gambar">
      <img src="../img/lingkaran.png" class="lingkaran" alt="">
      <img src="../img/bengkel1.png" class="bengkel" alt="">

      <div class="teks">
        <h1>BENGKEL AUTO SERVICE SEHAT</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia molestias ea iusto doloribus ipsum officia
          veritatis maxime aperiam earum minima.</p>
        <button class="pengunjung">
          <a href="/pengunjung">
            Pengunjung</a>
        </button>
        <button class="admin">
           <a href="login-admin.html">Admin</a></button>

         
      </div>
    </div>
  </div>
  <!-- Akhir Jumbotron -->

  <!-- tutorial -->
  <div class="container">
    <!-- info -->
    <article id="info">
    <h1>Info</h1>
          <hr style="width:50px; margin-left:620px; height:2px; color: #1D3557;">
          <p style="margin-left:100px ;">Informasi berikut ini merupakan informasi terkait kategori mobil untuk pelanggan yang akan mengambili nomor antrian</p>
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/kategori mobil/size-s.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/kategori mobil/size-m.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/kategori mobil/size-l.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/kategori mobil/size-xl.png" class="d-block w-100" alt="...">
    </div>
  </div>
 
</div>
    </article>

    <!-- tutorial -->
    <article id="tutorial">
      <h1>Tutorial</h1>
      <hr style="width: 116px; margin-left:590px; height:2px; color: #1D3557;">
      <p>Bagi customer yang ingin mengambil dan melihat nomor antrian, berikut ini merupakan tutorial aplikasi </p>

      <div class="tutorial">
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3 ">
            <div class="col-lg col">
              <img src="../img/ambil-antrian.png" alt="">
              <h4>Ambil Antrian</h4>
              <p>Anda bisa langsung pilih button <b>PENGUNJUNG</b> yang berada dimenu Home. Setelah itu anda wajib untuk
                menginput data yang dibutuhkan</p>

            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="col-lg col">
              <img src="../img/lihat-antrian.png" alt="">
              <h4>Lihat Antrian</h4>
              <p>Untuk melihat  total antrian dan antrian yang sedang berjalan, anda bisa memilih button <b>LIVE
                  ANTRIAN</b> pada menu Navbar</p>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="col-lg col">
              <img src="../img/antrian-saya.png" alt="">
              <h4>Perlihatkan Antrian</h4>
              <p>Apabila nomor antrian anda sudah hampir mendekati, anda bisa langsung menuju BENGKEL SEHAT dan memperlihatkan nomor antrian yang sudah anda ambil</p>
            </div>
          </div>
        </div>
      </div>
    </article>
    <!-- Akhir tutorial -->

    <!-- Galeri -->
    <article id="galeri">
      <div class="galeri">
        <h1>Galeri</h1>
        <hr style="width: 100px; margin-left:600px; height:2px; color: #1D3557;">
        <!-- ul>(li>img[src=../img/ling-galeri.png].ling $)*4 -->
        <ul class="background">
          <li><img src="../img/ling-galeri.png" alt="" class="ling1"></li>
          <li><img src="../img/ling-galeri.png" alt="" class="ling2"></li>
          <li><img src="../img/ling-galeri.png" alt="" class="ling3"></li>
          <li><img src="../img/ling-galeri.png" alt="" class="ling4"></li>
        </ul>

        <ul class="foto">
          <li><img src="../img/img1.png" alt=""></li>
          <li><img src="../img/img2.png" alt=""></li>
          <li><img src="../img/img3.png" alt=""></li>
          <li><img src="../img/img4.png" alt=""></li>
          <li><img src="../img/img5.png" alt=""></li>
          <li><img src="../img/img6.png" alt=""></li>
          <li><img src="../img/img7.png" alt=""></li>
          <li><img src="../img/img8.png" alt=""></li>
          <li><img src="../img/img9.jpg" alt=""></li>
        </ul>

        </svg>
      </div>
    </article>
    <!-- akhir galeri -->

    <!-- contact -->
    <article id="kontak">
    <div class="contact">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1"
          d="M0,192L80,165.3C160,139,320,85,480,85.3C640,85,800,139,960,144C1120,149,1280,107,1360,85.3L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
        </path>
      </svg>
      <h1>Hubungi Kami</h1>
      <hr style="width: 185px; margin-left:550px; height:2px; color: #ffff;">

      <div class="kiri">
        <div class="lokasi">
          <img src="../img/icon/lokasi.png" alt="">
          <h4>Location</h4>
          <p>Ujong Drien, Meureubo, Kabupaten Aceh Barat <br>
            Aceh 23681, Indonesia</p>
        </div>
        <div class="telefon">
          <img src="../img/icon/phone.png" alt="">
          <h4>Call</h4>
          <p>0813-6224-1111</p>
        </div>
        <div class="open">
          <img src="../img/icon/open.png" alt="">
          <h4>Opening Hours</h4>
          <p>Senin - minggu <br>
            08.30–18.00</p>
        </div>
      </div>

      <div class="maps">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.3570582922966!2d96.14762771390916!3d4.149999547343924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303ec38b030a171d%3A0x302ddde7c1a13614!2sBengkel%20Auto%20Service%20Sehat!5e0!3m2!1sid!2sid!4v1641496670093!5m2!1sid!2sid"
          width="450" height="307" style="border:0;" allowfullscreen="" loading="lazy"></iframe><br>

        <a href="https://web.facebook.com/Bengkel-Sehat-Pro-Auto-Clinic-Meulaboh-1225060947576543/">
          <img src="../img/icon/fb.png" alt="">
        </a>
        <a href="https://www.instagram.com/bengkelautoservicesehatmbo/">
          <img src="../img/icon/ig.png" alt="">
        </a>
      </div>
      </article>
      <!-- akhir contact -->


      <div class="footer">
        <p>Copyright &copy; 2021. All rights reserved</p>
      </div>

    </div>
  </div>
  <!-- akhir tutorial -->
   <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->
   <div class='back-to-top' style="cursor: pointer;">
  <svg viewBox="0 0 20 20"><polyline points="4 13 10 7 16 13"></polyline></svg>
</div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

  <!-- <script src="script.js"></script> -->
  <script src="js/dom.js"></script>
</body>

</html>