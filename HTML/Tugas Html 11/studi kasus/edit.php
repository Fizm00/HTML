<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Crud Dengan PHP dan MySQL</title>
</head>
<body>
    <div>
        <h1>Edit Data</h1>
    </div>

    <br/>

    <a href="full.php">Lihat Semua Data</a>

    <br/>
    <h3>Edit data</h3>

    <?php
    include "koneksi.php";
    $nim = $_GET['nim'];
    $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE nim_mahasiwa='$nim'") or die(mysqli_error($koneksi));
    $no = 1;
    while($d = mysqli_fetch_array($data)){
    ?>
    <form action="update.php" method="post"></form>
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="nim" value="<?php echo $d["nim_mahasiwa"] ?>">
                    <input type="text" name="nama" value="<?php echo $d["nama_mahasiswa"] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $d["alamat_mahasiswa"] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>