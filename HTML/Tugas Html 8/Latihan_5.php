<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
</head>

<body>
    <!-- Berikut ini merupakan pengulangan while -->
    <?php
    $i = 0;
    while ($i < 10) {
        echo $i;
        // Inkremen counter
        $i++;
    }
    ?>

    <!-- Berikut ini merupakan pengulangan do-while -->
    <?php
    $i = 0;
    do {
        echo $i;
        // Inkremen counter
        $i++;
    } while ($i < 10);
    ?>

    <!-- Berikut ini merupakan pengulangan for -->
    <?php
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }
    ?>

    <!-- Berikut ini merupakan pengulangan foreach -->
    <?php
    $arr = array(1, 2, 3, 4);
    foreach ($arr as $value) {
        echo $value;
    }
    ?>
</body>

</html>