<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pernyataan Seleksi</title>
</head>

<body>
    <!-- Berikut ini contoh pernyataan if -->
    <?php
    $a = 10;
    $b = 5;
    if ($a > $b) {
        echo 'a lebih besar dari b';
    }
    ?>

    <!-- Berikut ini contoh pernyataan if-else -->
    <?php
    $a = 10;
    $b = 5;
    if ($a > $b) {
        echo 'a lebih besar dari b';
    } else {
        echo 'a TIDAK lebih besar dari b';
    }
    ?>

    <!-- Berikut ini contoh pernyataan if-elseif -->
    <?php
    $a = 10;
    $b = 5;
    if ($a > $b) {
        echo 'a lebih besar dari b';
    } elseif ($a == $b) {
        echo 'a sama dengan b';
    } else {
        echo 'a kurang dari b';
    }
    ?>

    <!-- Berikut ini adalah pernyataan switch -->
    <?php
    $i = 0;
    if ($i == 0) {
        echo "i equals 0";
    } elseif ($i == 1) {
        echo "i equals 1";
    } elseif ($i == 2) {
        echo "i equals 2";
    }
    // Ekuivalen, dengan pendekatan switch
    switch ($i) {
        case 0:
            echo "i equals 0";
            break;
        case 1:
            echo "i equals 1";
            break;
        case 2:
            echo "i equals 2";
            break;
    }
    ?>
</body>

</html>