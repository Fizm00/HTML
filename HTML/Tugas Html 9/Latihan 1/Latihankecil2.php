<!-- Berikut ini merupakan pemanfaatan variabel n $_REQUEST untuk menggantikan fungsi $_GET atau $_POST -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form Request</title>
</head>

<body>
    <h1>Form Request</h1>
    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>
        <input type="submit" name="submit" value="Kirim">
    </form>

    <?php
    $nama = $_REQUEST['nama'];
    $email = $_REQUEST['email'];

    if (isset($_REQUEST['submit'])) {
        echo "<p>Halo, " . $nama . "!</p>";
        echo "<p>Email kamu adalah " . $email . ".</p>";
    }
    ?>
</body>

</html>