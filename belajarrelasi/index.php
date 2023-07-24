<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_employee");

$query =
    "SELECT employee.id, employee.nama, employee.jk, employee.foto, employee.tgl, divisi.divisi, nik.nik, project.nama_project, project.deskripsi
        FROM employee 
        LEFT JOIN divisi ON employee.id_divisi = divisi.id
        LEFT JOIN nik ON employee.id_nik = nik.id
        LEFT JOIN employee_project AS ep ON employee.id = ep.employee_id
        LEFT JOIN project ON ep.project_id = project.project_id
        ORDER BY employee.id DESC
        ";

$result = mysqli_query($koneksi, $query);

mysqli_close($koneksi);

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
            <th>Tanggal</th>
            <th>Aksi</th>
            <th bgcolor="tomato">Divisi</th>
            <th bgcolor="green">NIK</th>
            <th bgcolor="blue">Project</th>
            <th bgcolor="blue">Deskripsi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["jk"]; ?></td>
                <td><img style="height: 50px; width: 50px ;" src="../file/img/<?= $row["foto"]; ?>" alt=""></td>
                <td><?= $row["tgl"]; ?></td>
                <td>
                    <button style="background-color: red ;"><a href="hapus.php?id=<?= $row["id"]; ?>">Hapus</a></button> |
                    <button style="background-color: green ;"><a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a></button>
                </td>
                <td><?= $row["divisi"]; ?></td>
                <td><?= $row["nik"]; ?></td>
                <td style="max-width: 170px;"><?= $row["nama_project"]  ?: "-"; ?></td>
                <td style="max-width: 400px;"><?= $row["deskripsi"]  ?: "-"; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>
    </table>

</body>

</html>