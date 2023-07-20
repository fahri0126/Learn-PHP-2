<?php
require 'crud.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        header("location:hobby.php");
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Bootstrap end-->
</head>

<body>
    <section class="container mt-5">
        <div class="row text-center">
            <div class="col">
                <h2 class="fs-2 fw-light">New Hobby</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="n_hobby" class="form-label">Your Hobby</label>
                        <input type="text" class="form-control" id="n_hobby" name="n_hobby" required autocomplete="off" autofocus autocapitalize="on" oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" />
                    </div>
                    <div class="mb-3">
                        <label for="d_hobby" class="form-label">Description</label>
                        <textarea class="form-control" id="d_hobby" rows="3" name="d_hobby" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Image</label>
                        <input type="text" class="form-control" id="gambar" name="gambar" autocomplete="off" oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" />
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- form -->


    <!-- Js Boostrap -->
    <script src="popper/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>