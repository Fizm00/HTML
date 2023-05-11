<!-- Berikut ini merupakan form dengan metode get -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dengan Metode GET</title>
</head>

<body>
    <h1>Form dengan Metode GET</h1>
    <form action="proses.php" method="get">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>
        <input type="submit" name="submit" value="Kirim">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $nama = $_GET['nama'];
        $email = $_GET['email'];

        echo "<p>Halo, " . $nama . "!</p>";
        echo "<p>Email kamu adalah " . $email . ".</p>";
    }
    ?>
</body>

</html>