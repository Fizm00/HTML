<?php
session_start();

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "db_buku");
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Mengecek apakah username sudah terdaftar
    $checkQuery = "SELECT * FROM user WHERE username = '$username'";
    $checkResult = mysqli_query($koneksi, $checkQuery);
    if (mysqli_num_rows($checkResult) > 0) {
        // Jika username sudah terdaftar, tampilkan pesan kesalahan
        echo "Username sudah terdaftar. Silakan gunakan username lain.";
    } else {
        // Jika username belum terdaftar, lakukan proses registrasi
        $insertQuery = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
        $insertResult = mysqli_query($koneksi, $insertQuery);

        if ($insertResult) {
            // Registrasi berhasil, redirect ke halaman login
            header("Location: login.php");
            exit();
        } else {
            // Registrasi gagal, tampilkan pesan kesalahan
            echo "Registrasi gagal. Silakan coba lagi.";
        }
    }

    // Menutup koneksi database
    mysqli_close($koneksi);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Akhir</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="register.php">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name="person-add-outline"></ion-icon>
                        <input type="text" name="username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="key-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <button type="submit" name="register">Register</button>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
