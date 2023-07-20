<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_employee");

$result = mysqli_query($koneksi, "SELECT * FROM employee, divisi WHERE employee.id_divisi = divisi.id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>

    <style>
        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <center>
        <button style="background-color: blue ; margin: 1rem ;" align="center"><a href="tambah.php">Tambah data baru</a></button>
    </center>
    <?php $i = 1 ?>
    <table border="1" cellspacing="0" cellpadding="5" align="center">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Foto</th>
            <th>Aksi</th>
            <th>Tanggal</th>
            <th bgcolor="tomato">Divisi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["jk"]; ?></td>
                <td><img style="height: 50px; width: 50px ;" src="../file/img/<?= $row["foto"]; ?>" alt=""></td>
                <td>
                    <button style="background-color: red ;"><a href="hapus.php?id=<?= $row["id"]; ?>">Hapus</a></button> |
                    <button style="background-color: green ;"><a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a></button>
                </td>
                <td><?= $row["tgl"]; ?></td>
                <td><?= $row["divisi"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>
    </table>

</body>

</html>