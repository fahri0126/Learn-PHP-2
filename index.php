<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
  <title>Latihan Bootstrap</title>

  <!-- Bootstrap  css-->

  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- Bootstrap -->
  <style>
    .perenggang {
      height: 20vh;
    }

    .perenggang2 {
      height: 10vh;
    }
  </style>
</head>

<body id="home">
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
            <a class="nav-link" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> About </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="biodata.php">Biodata</a></li>
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
  <div class="perenggang2"></div>
  <!-- Landing page -->

  <section class="container mt-2 pb-5">
    <div class="container d-flex align-items-center justify-content-center" style="height: 75vh">
      <div class="row justify-content-between">
        <div class="col-md-4 d-flex justify-content-center">
          <img class="rounded-circle profileimage img-thumbnail" src="img/avatar.png" alt="image" />
        </div>

        <div class="col-md-7">
          <h1 class="display-4 fw-bold text-secondary">Halo, saya Fahri</h1>
          <p class="lead fs-4">Saya adalah laki-laki yang berjiwa solidaritas dan berprilaku jujur</p>
          <a class="btn btn-secondary mt-3 btn-lg text-light" href="#biodata" role="button">More </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Landing page -->

  <div class="perenggang2"></div>

  <!-- footer -->

  <footer class="bg-secondary text-white text-center p-4">
    <p>Created by Muh. Fahri | <a class="text-white fw-bold" href="https://www.instagram.com/muhammadfahri6902?r=nametag" target="_blank">muhammadfahri6902</a></p>
  </footer>

  <!-- footer end -->

  <!-- Js Boostrap -->
  <script src="popper/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>