<?php
require('crud.php');

if (isset($_POST["submit"])) {
    $hobi = $_POST["n_hobby"];
    $desk = $_POST["d_hobby"];
    $img = $_POST["image"];

    $que = "INSERT INTO tb_hobby 
                  VALUES 
                  ('', '$hobi', '$desk', '$img')
                  ";
    mysqli_query($conn, $que);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../file/css/bootstrap.min.css" />
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
                <form action="hobby.php" method="post">
                    <div class="mb-3">
                        <label for="hobby" class="form-label">Your Hobby</label>
                        <input type="text" class="form-control" id="hobby" />
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Message</label>
                        <input type="text" class="form-control" id="pesan" />
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Image</label>
                        <textarea class="form-control" id="img" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- form -->


    <!-- Js Boostrap -->
    <script src="../file/popper/popper.min.js"></script>
    <script src="../file/js/bootstrap.min.js"></script>
</body>

</html>