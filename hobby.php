<?php
require "crud.php";
$hobby = query("SELECT * FROM tb_hobby");
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
      height: 21vh;
    }

    .perenggang2 {
      height: 2vh;
    }

    .cek {
      height: 63px;
    }
  </style>
</head>

<body>
  <!-- Navigation Bar Start-->

  <div class="cek"></div>

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
              <li><a class="dropdown-item" href="#hobby">Hobby</a></li>
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

  <!-- Hobby -->
  <section class="mb-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-2 d-flex align-items-end justify-content-center">
          <h2 class="fw-normal fs-3 text-center">My Hobby</h2>
        </div>
        <div class="col-md-2 text-center">
          <a type="button" class="btn btn-primary mt-4" href="tambah.php">Add New Hobby</a>
        </div>
      </div>
      <div class="row">
        <div class="col mt-3">
          <hr class="mt-5" />
          <p class="lead fs-5 text-center">List Hobby</p>
        </div>
      </div>

      <div class="row justify-content-center">

        <?php foreach ($hobby as $row) : ?>

          <div class="col-md-4 mt-3">
            <div class="card">
              <img src="img/<?= $row["image"]; ?>" class="card-img-top" alt="#" />
              <div class="card-body">
                <p class="card-text fs-5">
                  <strong><?= $row["n_hobby"] ?></strong>
                </p>
                <p class="card-text"><?= $row["d_hobby"] ?></p>
              </div>
            </div>
          </div>

        <?php endforeach; ?>

      </div>
    </div>
  </section>
  <!-- Hobby end -->


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