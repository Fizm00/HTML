<!-- koneksi dari database -->
<?php
    $koneksi = mysqli_connect("localhost","root","","db_mahasiswa") 
    or die("koneksi gagal");
?>