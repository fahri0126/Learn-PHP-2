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
      height: 31vh;
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
              <li><a class="dropdown-item" href="biodata.php">Biodata</a></li>
              <li><a class="dropdown-item" href="hobby.php">Hobby</a></li>
              <li><a class="dropdown-item" href="#">Education</a></li>
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

  <div class="perenggang2"></div>

  <!-- education -->
  <div id="pendidikan"></div>
  <section class="container">
    <div class="row text-center mt-4 mb-3">
      <div class="col">
        <h2 class="fs-2 fw-light">Education</h2>
      </div>
    </div>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Sekolah Menengah Kejuruan (SMK)</button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p><strong>Nama sekolah</strong> : SMKN 6 Kendari</p>
            <p><strong>Alamat</strong> : Kec. Baruga, Kota Kendari</p>
            <p><strong>Tahun Masuk</strong> : 5 Juli 2021</p>
            <p><strong>Tahun Lulus</strong> : Belum lulus</p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Sekolah Menengah Pertama (SMP)</button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p><strong>Nama sekolah</strong> : SMPN 12 Konawe Selatan</p>
            <p><strong>Alamat</strong> : Kec. Konda Kab. Konawe Selatan</p>
            <p><strong>Tahun Masuk</strong> : 1 Juli 2018</p>
            <p><strong>Tahun Lulus</strong> : 7 Juni 2021</p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Sekolah Dasar (SD)</button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p><strong>Nama sekolah</strong> : SDN 13 Konawe Selatan</p>
            <p><strong>Alamat</strong> : Kec. Konda, Kab. Konawe Selatan</p>
            <p><strong>Tahun Masuk</strong> : 29 Desember 2012</p>
            <p><strong>Tahun Lulus</strong> : 4 Juni 2018</p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Taman Kanak-kanak (TK)</button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p><strong>Nama sekolah</strong> : TK Idhata Kendari</p>
            <p><strong>Alamat</strong> : Kel. Benu-Benua, Kec. Kendari Barat</p>
            <p><strong>Tahun Masuk</strong> : 2011</p>
            <p><strong>Tahun Lulus</strong> : 2012</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- education end -->

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