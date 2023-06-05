<?php
session_start(); // Memulai session
session_destroy(); // Menghapus semua session
header("Location: Landingpage.php"); // Mengarahkan ke halaman login
exit();
?>
