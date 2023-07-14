<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
  <title>My Biodata</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Bootstrap end-->

  <style>
    .perenggang {
      height: 20vh;
    }

    .perenggang2 {
      height: 10vh;
    }
  </style>
</head>

<body>
  <!-- Navigation Bar Start-->

  <nav class="navbar navbar-expand-lg shadow-sm navbar-dark bg-secondary fixed-top">
    <div class="container">
      <!-- kiri -->
      <a class="navbar-brand fw-normal fs-4" href="#">muh._.fahri</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- kiri -->

      <!-- kanan -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto nav-pills">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> About </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#biodata">Biodata</a></li>
              <li><a class="dropdown-item" href="hobby.php">Hobby</a></li>
              <li><a class="dropdown-item" href="education.php">Education</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
      <!-- kanan -->
    </div>
  </nav>

  <!-- Navigation Bar end -->

  <div class="perenggang"></div>

  <!-- biodata -->
  <div id="biodata"></div>

  <section class="container list-group shadow-sm">
    <div class="row text-center pb-4 pt-3 list-group-item">
      <h2 class="fs-2 fw-light">Biodata</h2>
    </div>
    <div class="row pt-3 list-group-item d-flex">
      <div class="col-md-4"><strong>Nama Lengkap</strong></div>
      <div class="col-md-4">: Muh. Fahri Fairuz Ramadhan</div>
    </div>
    <div class="row pt-3 list-group-item d-flex">
      <div class="col-md-4"><strong>Jenis Kelamin</strong></div>
      <div class="col-md-4">: Laki-Laki</div>
    </div>
    <div class="row pt-3 list-group-item d-flex">
      <div class="col-md-4"><strong>TTL</strong></div>
      <div class="col-md-4">: Kendari, 20 Oktober 2006</div>
    </div>
    <div class="row pt-3 list-group-item d-flex">
      <div class="col-md-4"><strong>Agama</strong></div>
      <div class="col-md-4">: Islam</div>
    </div>
    <div class="row pt-3 list-group-item d-flex">
      <div class="col-md-4"><strong>Anak Ke</strong></div>
      <div class="col-md-4">: 4 (Keempat) dari empat bersaudara</div>
    </div>
    <div class="row pt-3 list-group-item d-flex">
      <div class="col-md-4"><strong>Alamat</strong></div>
      <div class="col-md-4">: Kota Kendari, Sulawesi Tenggara</div>
    </div>
    <div class="row pt-3 list-group-item d-flex justify-content-center">
      <div>&nbsp;</div>
    </div>
  </section>
  <!-- About end -->

  <div class="perenggang"></div>

  <!-- footer -->

  <footer class="bg-secondary text-white text-center p-3">
    <p>Created by Muh. Fahri | <a class="text-white fw-bold" href="https://www.instagram.com/muhammadfahri6902?r=nametag" target="_blank">muhammadfahri6902</a></p>
  </footer>

  <!-- footer end -->

  <!-- Js Boostrap -->
  <script src="popper/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>