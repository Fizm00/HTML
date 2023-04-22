<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi dan Prosedur</title>
</head>

<body>
    <!-- Berikut ini merupakan Definisi/Prosedur -->
    <?php
    // Contoh prosedur
    function do_print()
    {
        // Mencetak informasi timestamp
        echo time();
    }
    // Memanggil prosedur
    do_print();
    echo '<br />';
    // Contoh fungsi penjumlahan
    function jumlah($a, $b)
    {
        return ($a + $b);
    }
    echo jumlah(2, 3);
    // Output: 5
    ?>

    <!-- Berikut ini merupakan Argumen Fungsi/Prosedur -->
    <?php
    /**
     * Mencetak string
     * $teks nilai string
     * $bold adalah argumen opsional
     */
    function print_teks($teks, $bold = true)
    {
        echo $bold ? '<b>' . $teks . '</b>' : $teks;
    }
    print_teks('Indonesiaku');
    // Mencetak dengan huruf tebal
    print_teks('Indonesiaku', false);
    // Mencetak dengan huruf reguler
    ?>
</body>

</html>