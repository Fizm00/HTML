<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Mengatur nilai cookie
    setcookie("nama", "Firza Himawan", time() + 3600, "/");
    echo "Cookie telah diatur.";

    // Memeriksa apakah cookie sudah diset
    if (isset($_COOKIE["nama"])) {
        echo "Cookie dengan nama 'nama' bernilai '" . $_COOKIE["nama"] . "'. ";
        // Menambahkan tombol hapus cookie
        echo "<form method='post'><button type='submit' name='hapuscookie'>Hapus Cookie</button></form>";
    } else {
        echo "Cookie dengan nama 'nama' belum diset.";
    }

    // Memeriksa apakah tombol hapus cookie ditekan
    if (isset($_POST["hapuscookie"])) {
        // Menghapus cookie dengan nama "nama"
        setcookie("nama", "", time() - 3600, "/");
        echo "Cookie dengan nama 'nama' telah dihapus.";
    }
    ?>

</body>

</html>
