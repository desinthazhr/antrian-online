<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

  <link rel="stylesheet" href="admin.css">
  <!-- <link rel="stylesheet" href="style.css"> -->

  <title>Admin - Bengkel Sehat</title>
</head>

<body>
  <!-- navbar -->
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
        <a class="nav-item nav-link active" aria-current="page" href="index.html">Home</a>
        <a class="nav-item nav-link" href="live-antrian.html">Live Antrian</a>
        <a class="nav-item nav-link" href="index.html#tutorial">Tutorial</a>
        <a class="nav-item nav-link" href="index.html#galeri">Galeri</a>
        <a class="nav-item nav-link" href="index.html#kontak   ">Kontak</a>
      </div>
    </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!--form admin  -->
  <div class="container" style="margin-top: -50px;">
    <!-- <div class="container-dua me-3"> -->
      <div class="wrapImage">
        <img src="../img/logo-bengkel.png" alt="">
      </div>
      <form class="form-admin" id="form-admin">
        <h3>ADMIN</h3>
        <div class="textbox">
          <i class="bi bi-person"></i>
          <input type="text" id="inputUsername" placeholder="Username" name="nama" value="" required>
        </div>
        <div class="textbox">
          <i class="bi bi-lock"></i>
          <input type="password" id="inputPassworrd" placeholder="Password" required>
          <i class="bi bi-eye"></i>
        </div>
        <small>Forgot Password?</small>
        <input class="btn-admin" type="submit" value="Sign In">
      </form>
    <!-- </div> -->
  </div>

</body>

</html>