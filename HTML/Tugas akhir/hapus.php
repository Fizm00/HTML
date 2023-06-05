<?php

include 'koneksi.php'; // Mengimpor skrip koneksi dari file koneksi.php

if (isset($_GET['isbn'])) { // Memeriksa apakah variabel GET 'isbn' terdefinisi, jika ya, jalankan blok kode di bawahnya
    $isbn = $_GET['isbn']; 

    $query = "DELETE FROM buku WHERE isbn_buku = '$isbn'"; // Menjalankan query DELETE untuk menghapus data di tabel buku
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
