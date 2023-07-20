<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_employee");
// date('d | M | y');
if (isset($_POST["submit"])) {

    $nama = htmlspecialchars($_POST["nama"]);
    $divisi = htmlspecialchars($_POST["id_divisi"]);
    $jk = htmlspecialchars($_POST["jk"]);
    $foto = htmlspecialchars($_POST["foto"]);
    $tgl = htmlspecialchars($_POST["tgl"]);

    $query = "INSERT INTO employee VALUES 
                ('', '$nama', '$jk', '$foto', '$tgl', '$divisi')";

    $tambah =  mysqli_query($koneksi, $query);
    $value = mysqli_affected_rows($koneksi);

    if ($value > 0) {
        header("location:index.php");
    } else {
        echo mysqli_error($koneksi);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>

    <form action="" method="post">
        <ul>
            <h1>Tambah Data</h1>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" autocomplete="off" autofocus required>
            </li><br>
            <li>
                <label for="divisi">Divisi : </label>
                <input type="number" name="id_divisi" id="divisi" autocomplete="off" required>
            </li><br>
            <li>
                <label for="jk">JK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp: </label>
                <input type="text" name="jk" id="jk" autocomplete="off" required>
            </li><br>
            <li>
                <label for="foto">Foto &nbsp;&nbsp: </label>
                <input type="text" name="foto" id="foto" autocomplete="off" value="noimg.jpg">
            </li><br>
            <input type="hidden" name="tgl" id="tgl" autocomplete="off" value="<?= date('d | M | y'); ?>">
            <li>
                <button type="submit" name="submit">submit</button>
            </li>
        </ul>
    </form>

</body>

</html>