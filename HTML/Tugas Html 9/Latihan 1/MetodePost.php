<!-- Berikut ini merupakan form denga metode POST -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dengan Metode POST</title>
</head>

<body>
    <h1>Form dengan Metode POST</h1>
    <form action="proses.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>
        <input type="submit" name="submit" value="Kirim">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];

        echo "<p>Halo, " . $nama . "!</p>";
        echo "<p>Email kamu adalah " . $email . ".</p>";
    }
    ?>
</body>

</html>