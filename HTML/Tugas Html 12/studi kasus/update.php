<?php
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"UPDATE mahasiswa SET nama_mahasiswa='$nama', alamat_mahasiswa='$alamat' WHERE nim_mahasiwa='$nim'");

header("location:full.php?pesan=update");
?>