<?php
include 'koneksi.php';

if (isset($_POST['isbn'])) {
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $jumlah_halaman = $_POST['jumlah_halaman'];

    $query = "UPDATE buku SET judul_buku='$judul', penulis_buku='$penulis', penerbit_buku='$penerbit', tahun_terbit='$tahun_terbit', jumlah_halaman='$jumlah_halaman' WHERE isbn_buku='$isbn'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Data berhasil diperbarui.";
        header("Location: homepage.php");
        exit();
    } else {
        echo "Gagal memperbarui data.";
        header("Location: homepage.php");
        exit();
    }
}
?>
