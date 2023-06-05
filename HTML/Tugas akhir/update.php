<?php
include 'koneksi.php'; // Mengimpor skrip koneksi dari file koneksi.php

// Memeriksa apakah variabel POST 'isbn' terdefinisi, jika ya, jalankan blok kode di bawahnya
if (isset($_POST['isbn'])) { 
    //mengambil nilai dari variabel POST 'isbn' dan menyimpannya ke dalam variabel $isbn
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $jumlah_halaman = $_POST['jumlah_halaman'];

    // Menjalankan query UPDATE untuk memperbarui data di tabel buku
    $query = "UPDATE buku SET judul_buku='$judul', penulis_buku='$penulis', penerbit_buku='$penerbit', tahun_terbit='$tahun_terbit', jumlah_halaman='$jumlah_halaman' WHERE isbn_buku='$isbn'";
    $result = mysqli_query($koneksi, $query); // Menjalankan query di atas
    
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
