<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data dan Casting</title>
</head>

<body>
    <!-- Berikut ini adalah contoh tipe data -->
    <?php
    $bil = 3;
    var_dump(is_int($bil));
    // Output: bool(true)
    $var = "";
    var_dump(is_string($var));
    // Output: bool(true)
    ?>

    <!-- Berikut ini adalah contoh casting -->
    <?php
    $str = '123abc';
    // Casting nilai vaiabel $str ke integer
    $bil = (int) $str; // $bil = 123
    echo gettype($str);
    // Output: string
    echo gettype($bil);
    // Output: integer
    ?>
</body>

</html>