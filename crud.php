<?php
// connect ke database
$conn = mysqli_connect("localhost", "root", "", "db_hobby");

function tampil($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// tambah data
function tambah($data)
{
  global $conn;
  $n_hobby = $data["n_hobby"];
  $d_hobby = $data["d_hobby"];
  $gambar = $data["gambar"];

  $query = "INSERT INTO tb_hobby VALUES
                ('', '$n_hobby', '$d_hobby', '$gambar')
                ";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

// hapus data
function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM tb_hobby WHERE id=$id");
  return mysqli_affected_rows($conn);
}


// ubah data 
function ubah($data)
{
  global $conn;
  $id = $data["id"];
  $n_hobby = $data["n_hobby"];
  $d_hobby = $data["d_hobby"];
  $gambar = $data["gambar"];

  $query = "UPDATE tb_hobby SET
                n_hobby = '$n_hobby',
                 d_hobby = '$d_hobby',
                  gambar = '$gambar'
              WHERE id= $id
                ";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}


function cari($keyword)
{
  $query  = "SELECT * FROM tb_hobby
              WHERE 
            n_hobby LIKE '%$keyword%' OR
            d_hobby LIKE '%$keyword%'
            ";
  return tampil($query);
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

// htmlspecialchars();

// if (!$result){
// echo mysqli_error($conn);
// };

?>