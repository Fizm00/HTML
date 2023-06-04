<?php
// Proses tambah buku
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $jumlah_halaman = $_POST['jumlah_halaman'];

    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "db_buku") or die("Koneksi gagal");

    // Query tambah buku
    $query = "INSERT INTO buku (isbn_buku, judul_buku, penulis_buku, penerbit_buku, tahun_terbit, jumlah_halaman)
              VALUES ('$isbn', '$judul', '$penulis', '$penerbit', '$tahun_terbit', '$jumlah_halaman')";

    // Eksekusi query
    $result = mysqli_query($koneksi, $query);

    // Cek jika proses tambah buku berhasil
    if ($result) {
        // Redirect ke homepage.php
        header("Location: homepage.php");
        exit;
    } else {
        // Jika proses tambah buku gagal
        echo "Error: " . mysqli_error($koneksi);
    }

    // Tutup koneksi database
    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="Tambahbuku.css">
</head>

<body>
    <div class="form-box">
        <form action="Tambahbuku.php" method="POST">
            <div class="inputbox">
                <ion-icon name="book-outline"></ion-icon>
                <input type="text" name="isbn" required>
                <label for="isbn">ISBN</label>
            </div>
            <div class="inputbox">
                <ion-icon name="newspaper-outline"></ion-icon>
                <input type="text" name="judul" required>
                <label for="isbn">JUDUL</label>
            </div>
            <div class="inputbox">
                <ion-icon name="person-outline"></ion-icon>
                <input type="text" name="penulis" required>
                <label for="penulis">PENULIS BUKU</label>
            </div>
            <div class="inputbox">
                <ion-icon name="business-outline"></ion-icon>
                <input type="text" name="penerbit" required>
                <label for="penerbit">PENERBIT BUKU</label>
            </div>
            <div class="inputbox">
                <ion-icon name="calendar-outline"></ion-icon>
                <input type="text" name="tahun_terbit" required>
                <label for="tahun_terbit">TAHUN TERBIT</label>
            </div>
            <div class="inputbox">
                <ion-icon name="archive-outline"></ion-icon>
                <input type="text" name="jumlah_halaman" required>
                <label for="stok">JUMLAH HALAMAN</label>
            </div>
            <button type="submit" name="submit">SIMPAN</button>
        </form>
        <div class="button-box">
            <a href="homepage.php" class="back-link">Kembali ke Homepage</a>
        </div>
    </div>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
