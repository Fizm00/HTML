<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel</title>
</head>

<body>
    <!-- Contoh Variabel -->
    <?php
    // Deklarasi dan inisialisasi
    $bil = 3;
    echo $bil;
    ?>

    <!-- Contoh variabel dengan tahap pengembangan, dengan memanfaatkan fungsi var_dump() atau print_r() -->
    <?php
    // Deklarasi dan inisialisasi
    $bil = 3;
    // Dumping informasi mengenai variabel
    var_dump($bil);
    print_r($bil);
    ?>

    <!-- perbedaan dari var_dump() dengan konstruksi bahasa echo adalah
        Dengan menggunakan var_dump(), kita dapat melihat informasi detail tentang variabel 
        yang dapat membantu kita dalam melakukan debugging atau analisis data. 
        Sedangkan echo hanya menampilkan isi dari variabel atau string yang diberikan ke klien. -->

    <!-- Contoh variabel dengan pemeriksaan variabel di-set dengan menggunakan isset () -->
    <?php
		$name = "Firza";
		$age;

		if(isset($name)) {
			echo "Halo, " . $name . "!";
		} else {
			echo "Variabel nama belum di-set.";
		}

		if(isset($age)) {
			echo "Usia: 18 " . $age;
		} else {
			echo "Variabel usia belum di-set.";
		}
	?>
</body>

</html>