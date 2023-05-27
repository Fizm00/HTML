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
                <div>
                    <h2 class="mt-4 text-center text-white">Data Buku</h2>
                </div>
                <div>
                <div class="text-start" style="position: relative; top: -43px; float: right; margin-right: -5%;">
                    <a href="logout.php" class="btn btn-outline-light" onclick="return confirm('Apakah Anda yakin ingin logout?')">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

    <div class="form-box">
        <form method="post" action="add_buku.php">
            <div class="inputbox">
                <ion-icon name="book-outline"></ion-icon>
                <input type="text" name="isbn" required>
                <label for="isbn">ISBN</label>
            </div>
            <div class="inputbox">
                <ion-icon name="newspaper-outline"></ion-icon>
                <input type="text" name="judul" required>
                <label for="isbn">Judul</label>
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
                <input type="text" name="stok" required>
                <label for="stok">STOK</label>
            </div>
            <button type="submit" name="submit">SIMPAN</button>
        </form>
    </div>
    <h5 class="mt-4" style="margin-left: 160px; color:azure">Menampilkan data buku</h5>
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
                    <th>STOK</th>
                    <th>MENU</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM buku");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['isbn_buku']; ?></td>
                        <td><?php echo $d['judul_buku']; ?></td>
                        <td><?php echo $d['penulis_buku']; ?></td>
                        <td><?php echo $d['penerbit_buku']; ?></td>
                        <td><?php echo $d['tahun_terbit']; ?></td>
                        <td><?php echo $d['stok']; ?></td>
                        <td>
                            <a href="edit.php?isbn=<?php echo $d["isbn_buku"]; ?>" class="btn btn-primary">Edit</a>
                            <a href="hapus.php?isbn=<?php echo $d["isbn_buku"]; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        // Get all inputboxes
        const inputboxes = document.querySelectorAll('.inputbox');

        // Add event listener to each inputbox
        inputboxes.forEach(inputbox => {
            const input = inputbox.querySelector('input');
            const label = inputbox.querySelector('label');

            // Add focus event listener
            input.addEventListener('focus', () => {
                label.style.top = '0';
                label.style.fontSize = '12px';
                label.style.color = '#fff';
            });

            // Add blur event listener
            input.addEventListener('blur', () => {
                if (input.value === '') {
                    label.style.top = '20px';
                    label.style.fontSize = '16px';
                    label.style.color = '#fff';
                }
            });
        });
    </script>
</body>

</html>