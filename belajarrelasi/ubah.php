<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_employee");

$num = $_GET["id"];

$ambil_employee = mysqli_query($koneksi, "SELECT * FROM employee WHERE id=$num");
$tampil_employee = mysqli_fetch_assoc($ambil_employee);
$inik = $tampil_employee["id_nik"];
$id = $tampil_employee["id"];

$tampil_divisi = "SELECT * FROM divisi";
$result = mysqli_query($koneksi, $tampil_divisi);

$ambilnik = mysqli_query($koneksi, "SELECT * FROM nik WHERE id=$inik");
$var = mysqli_fetch_assoc($ambilnik);

$ambilprjk = mysqli_query($koneksi, "SELECT * FROM project WHERE project_id=$inik");
$tampil_prjk = mysqli_fetch_assoc($ambilprjk);



if (isset($_POST["submit"])) {

    $nama = htmlspecialchars($_POST["nama"]);
    $divisi = htmlspecialchars($_POST["id_divisi"]);
    $jk = htmlspecialchars($_POST["jk"]);
    $foto = htmlspecialchars($_POST["foto"]);
    $tgl = htmlspecialchars($_POST["tgl"]);
    $nik = htmlspecialchars($_POST["nik"]);
    $projek = htmlspecialchars($_POST["nama_project"]);
    $deskripsi = htmlspecialchars($_POST["deskripsi"]);

    $query = "UPDATE employee SET 
                nama = '$nama', id_divisi = '$divisi',  jk = '$jk', foto = '$foto', tgl = '$tgl' WHERE id=$num";
    $query2 = "UPDATE nik SET 
                nik = '$nik' WHERE id=$inik";
    $query3 = "UPDATE project SET 
                nama_project = '$projek', deskripsi ='$deskripsi' WHERE project_id=$inik";

    $kembali = mysqli_affected_rows($koneksi);
    mysqli_query($koneksi, $query);
    mysqli_query($koneksi, $query2);
    mysqli_query($koneksi, $query3);
    if ($kembali > 0) {
        header("location:index.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>

<body>
    <h1>UPDATE</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    <input type="text" name="nama" id="nama" autocomplete="off" autofocus required value="<?= $tampil_employee["nama"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jk">JK</label>
                </td>
                <td>
                    <input type="text" name="jk" id="jk" autocomplete="off" required value="<?= $tampil_employee["jk"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nik">NIK</label>
                </td>
                <td>
                    <input type="text" id="nik" name="nik" required maxlength="11" pattern="[0-900000000000]{11}" autocomplete="off" value="<?= $var["nik"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="foto">Foto</label>
                </td>
                <td>
                    <input type="text" name="foto" id="foto" autocomplete="off" value="<?= $tampil_employee["foto"]; ?>">
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
                <td><input type="text" name="nama_project" required id="projek" autocomplete="off" value="<?= $tampil_prjk["nama_project"]; ?>"></td>
                <td width="10px" for="deskripsi">
                    <label for="deskripsi" align="center">
                        <center>|</center>
                    </label>
                </td>
                <td><textarea name="deskripsi" id="deskripsi" cols="30" rows="2" autocomplete="off"><?= $tampil_prjk["deskripsi"]; ?></textarea></td>
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