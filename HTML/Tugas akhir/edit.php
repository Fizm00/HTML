<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Crud Dengan PHP dan MySQL</title>
    <link rel="stylesheet" href="edit.css">
</head>

<body>
    <div class="container">
        <h1>Edit Data</h1>

        <br />

        <?php
        include "koneksi.php";
        $isbn = $_GET['isbn']; // Mengambil data isbn dari URL yang dikirim oleh homepage.php
        $data = mysqli_query($koneksi, "SELECT * FROM buku WHERE isbn_buku='$isbn'") or die(mysqli_error($koneksi)); // Menjalankan query untuk memilih data buku berdasarkan isbn
        $no = 1; // Membuat variabel $no untuk membuat nomor urut
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <form action="update.php" method="post">
                <table>
                    <tr>
                        <td>ISBN</td>
                        <td>
                            // Menampilkan data isbn dari database ke dalam inputan form
                            <input type="hidden" name="isbn" value="<?php echo $d["isbn_buku"] ?>">
                            <input type="text" name="isbn_baru" value="<?php echo $d["isbn_buku"] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>JUDUL</td>
                        <td><input type="text" name="judul" value="<?php echo $d["judul_buku"] ?>"></td>
                    </tr>
                    <tr>
                        <td>PENULIS BUKU</td>
                        <td><input type="text" name="penulis" value="<?php echo $d["penulis_buku"] ?>"></td>
                    </tr>
                    <tr>
                        <td>PENERBIT BUKU</td>
                        <td><input type="text" name="penerbit" value="<?php echo $d["penerbit_buku"] ?>"></td>
                    </tr>
                    <tr>
                        <td>TAHUN TERBIT</td>
                        <td><input type="text" name="tahun_terbit" value="<?php echo $d["tahun_terbit"] ?>"></td>
                    </tr>
                    <tr>
                        <td>JUMLAH HALAMAN</td>
                        <td><input type="text" name="jumlah_halaman" value="<?php echo $d["jumlah_halaman"] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Simpan"></td>
                    </tr>
                </table>
            </form>
        <?php } ?>

        <a href="homepage.php">Lihat Semua Data</a>
    </div>
</body>

</html>
