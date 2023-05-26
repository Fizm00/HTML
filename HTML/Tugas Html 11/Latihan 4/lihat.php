<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mmembuat CRUD dengan PHP dan MySQL</title>
</head>
<body>
    <div class="judul">
        <h1>Detail Data</h1>
    </div>

    <br/>

    <br/>

    <?php
        include "koneksi.php";
        $nim = $_GET['nim'];
        $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE nim_mahasiwa='$nim'") or die(mysqli_error($koneksi));
        $no = 1;
        while($d = mysqli_fetch_array($data)){
        ?>
            <table>
                <tr>
                    <td>NIM</td>
                    <td>: <?php echo $d["nim_mahasiwa"] ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>: <?php echo $d["nama_mahasiswa"] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <?php echo $d["alamat_mahasiswa"] ?></td>
                </tr>
                <tr>
                </tr>
            </table>
        <?php } ?>
            <a href="full.php">Kembali Lihat Semua Data</a>
</body>
</html>