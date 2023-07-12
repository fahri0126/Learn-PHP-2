<?php
// connect ke database
$conn = mysqli_connect("localhost", "root", "", "db_hobby");

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

?>


<?php

// Ambil data dari database Query=Ambil
// $result = mysqli_query($conn, "SELECT * FROM tb_hobby");


// Ambil data dari object result (fetch)
// mysqli_fetch_row() menampilkan array numerik (index 0-999)
// mysqli_fetch_assoc() menampilkan array asosiatif (index string)
// mysqli_fetch_array() menampilkan kedua tipe array (numerik dan asosiatif) kekurangannya menampilkan sata double
// mysqli_fetch_object()

// while ( $tb = mysqli_fetch_assoc($result) )
// var_dump($tb);


// if (!$result){
// echo mysqli_error($conn);
// };

?>