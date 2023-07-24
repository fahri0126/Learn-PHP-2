<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_employee");

$id = $_GET["id"];

$ambil = "SELECT * FROM employee WHERE id=$id";
$var = mysqli_query($koneksi, $ambil);
$kon = mysqli_fetch_assoc($var);
$idnik = $kon["id_nik"];
if (isset($id) > 0) {
    $query = "DELETE FROM employee WHERE id = $id";
    $query2 = "DELETE FROM nik WHERE id=$idnik";
    mysqli_query($koneksi, $query);
    mysqli_query($koneksi, $query2);

    header('location:index.php');
}
