<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Akhir</title>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="homepage.css">
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 mt-4 text-center text-white">
                        <h2 class="Title">Data Buku</h2>
                    </div>
                    <div class="col-6 text-end">
                        <a href="Tambahbuku.php" class="btn btn-outline-light mt-4" style="margin-right: 10px;">Tambah Buku</a>
                        <a href="logout.php" class="btn btn-outline-light mt-4" onclick="return confirm('Apakah Anda yakin ingin logout?')">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="datatablecontainer container mt-4">
        <table id="myTable" class="display table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ISBN</th>
                    <th>JUDUL</th>
                    <th>PENULIS BUKU</th>
                    <th>PENERBIT BUKU</th>
                    <th>TAHUN TERBIT</th>
                    <th>JUMLAH HALAMAN</th>
                    <th>MENU</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Memanggil skrip koneksi dari file koneksi.php
                include 'koneksi.php';
                $no = 1; // Membuat variabel $no untuk membuat nomor urut
                // Menjalankan query SELECT untuk menampilkan data dari tabel buku
                $data = mysqli_query($koneksi, "SELECT * FROM buku");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        // Menampilkan data dari tabel buku ke dalam tabel di halaman homepage.php
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['isbn_buku']; ?></td>
                        <td><?php echo $d['judul_buku']; ?></td>
                        <td><?php echo $d['penulis_buku']; ?></td>
                        <td><?php echo $d['penerbit_buku']; ?></td>
                        <td><?php echo $d['tahun_terbit']; ?></td>
                        <td><?php echo $d['jumlah_halaman']; ?></td>
                        <td>
                            <div class="btn-group">
                                <div class="btn-group">
                                    // Membuat tombol edit dan hapus untuk setiap data buku
                                    <a href="edit.php?isbn=<?php echo $d["isbn_buku"]; ?>" class="btn btn-primary btn-sm mr-2">Edit</a>
                                    <a href="hapus.php?isbn=<?php echo $d["isbn_buku"]; ?>" class="btn btn-danger btn-sm mr-2" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> // Mengimpor jQuery dari CDN
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> // Mengimpor plugin DataTables dari CDN
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script> // Mengimpor Bootstrap dari CDN
    <script> // Membuat fungsi untuk mengaktifkan plugin DataTables
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>