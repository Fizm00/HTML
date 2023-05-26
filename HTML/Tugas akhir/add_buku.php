<?php
include 'koneksi.php';

$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$stok = $_POST['stok'];

$query = "INSERT INTO buku (isbn_buku, judul_buku, penulis_buku, penerbit_buku, tahun_terbit, stok) VALUES ('$isbn', '$judul', '$penulis', '$penerbit', '$tahun_terbit', '$stok')";
mysqli_query($koneksi, $query);

header("Location: homepage.php");
?>
