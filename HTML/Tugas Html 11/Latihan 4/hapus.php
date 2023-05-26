<?php
include 'koneksi.php';

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    // Menghapus data berdasarkan NIM
    $query = "DELETE FROM mahasiswa WHERE nim_mahasiwa = '$nim'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Data berhasil dihapus.";
        header("Location: full.php");
        exit();
    } else {
        echo "Gagal menghapus data.";
        header("Location: full.php");
        exit();
    }
}
?>
