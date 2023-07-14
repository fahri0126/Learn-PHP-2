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
              <li><a class="dropdown-item" href="education.php">Education</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
      <!-- kanan -->
    </div>
  </nav>

  <!-- Navigation Bar end -->

  <div class="perenggang"></div>

  <!-- contact -->
  <div id="contact"></div>
  <section class="container mt-5">
    <div class="row text-center">
      <div class="col">
        <h2 class="fs-2 fw-light">Contact</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" />
          </div>
          <div class="mb-3">
            <label for="email" class="form-labe">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="email" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </section>

  <!-- contact end -->

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