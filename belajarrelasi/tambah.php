<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_employee");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $divisi = htmlspecialchars($_POST["id_divisi"]);
    $jk = htmlspecialchars($_POST["jk"]);
    $foto = htmlspecialchars($_POST["foto"]);
    $tgl = htmlspecialchars($_POST["tgl"]);
    $nik = htmlspecialchars($_POST["nik"]);
    $projek = htmlspecialchars($_POST["nama_project"]);
    $deskripsi = htmlspecialchars($_POST["deskripsi"]);

    $tambah_nik = "INSERT INTO nik VALUES ('', '$nik')";
    mysqli_query($koneksi, $tambah_nik);
    $id_nik = mysqli_insert_id($koneksi);

    $tambah_employee = "INSERT INTO employee VALUES 
                ('', '$nama', '$jk', '$foto', '$tgl', '$divisi', '$id_nik')";
    mysqli_query($koneksi, $tambah_employee);
    $employee_id = mysqli_insert_id($koneksi);

    $tambah_project = "INSERT INTO project VALUES
                ('$id_nik', '$projek', '$deskripsi')";
    mysqli_query($koneksi, $tambah_project);
    $id_project = mysqli_insert_id($koneksi);

    $tambah_ep = "INSERT INTO employee_project (employee_id, project_id) VALUES ('$employee_id', '$id_nik')";
    mysqli_query($koneksi, $tambah_ep);

    if (mysqli_affected_rows($koneksi) > 0) {
        header("location:index.php");
        exit();
    } else {
        echo mysqli_error($koneksi);
    }
}

$tampil_divisi = "SELECT * FROM divisi";
$result = mysqli_query($koneksi, $tampil_divisi);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    <input type="text" name="nama" id="nama" autocomplete="off" autofocus required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jk">JK</label>
                </td>
                <td>
                    <input type="text" name="jk" id="jk" autocomplete="off" required>
                    <!-- <input type="radio" id="laki" name="jk"><label for="laki" value="Laki-Laki">Laki-Laki</label>
                    <input type="radio" id="perempuan" name="jk"><label for="perempuan" value="Perempuan">Perempuan</label> -->
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nik">NIK</label>
                </td>
                <td>
                    <input type="text" id="nik" name="nik" required maxlength="11" pattern="[0-900000000000]{11}" autocomplete="off">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="foto">Foto</label>
                </td>
                <td>
                    <input type="text" name="foto" id="foto" autocomplete="off" value="noimg.jpg">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="divisi">Divisi</label>
                </td>
                <td>
                    <select name="id_divisi" id="divisi" style="width: 178px;">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) : ?>
                            <option value="<?= $row["id"]; ?>" required><?= $row["divisi"]; ?></option>
                        <?php endwhile; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="projek">Projek</label></td>
                <td><input type="text" name="nama_project" required id="projek" autocomplete="off"></td>
                <td><label for="deskripsi">&nbsp;|&nbsp;</label></td>
                <td><textarea name="deskripsi" id="deskripsi" cols="30" rows="2" autocomplete="off"></textarea></td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="tgl" id="tgl" autocomplete="off" value="<?= date('d | M | y'); ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="submit">submit</button>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>