<?php
include 'koneksi.php';

if (isset($_GET['isbn'])) {
    $isbn = $_GET['isbn'];

    $query = "DELETE FROM buku WHERE isbn_buku = '$isbn'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Data berhasil dihapus.";
        header("Location: homepage.php");
        exit();
    } else {
        echo "Gagal menghapus data.";
        header("Location: homepage.php");
        exit();
    }
}
?>
