<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Akhir</title>
    <link rel="stylesheet" href="landingpage.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="Landinglogo.png" alt="Logo" width="50" height="50">
                <span>FIZM</span>
            </div>
            <ul>
                <?php
                    if (isset($_SESSION['username'])) {
                        // Jika pengguna sudah login, tampilkan tombol Logout
                        echo '<li><a href="logout.php">Logout</a></li>';
                    } else {
                        // Jika pengguna belum login, tampilkan tombol Login dan Register
                        echo '<li><a href="login.php">Login</a></li>';
                        echo '<li><a href="register.php">Register</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </header>
    <div class="content">
        <div class="text">
            <h2>Website Data Buku</h2>
            <p>Tugas Proyek Akhir Matkul Pemrograman-web Semester 2 TI UNY angkatan 22</p>
        </div>
        <div class="image">
            <img src="Landing.png" alt="Gambar" width="500px" height="auto">
        </div>
    </div>
</body>
</html>
