<?php
/*
    variable sistem
    variable built in php (variable yang sudah ada di php)
*/
echo $_SERVER["DOCUMENT_ROOT"];
echo "<br /><br /><br />";


/*
    variabel user
    variabel yang dibuat user
*/
$name = 'zaqiyah';
$age = 16;
$weight = 164;

$name = 'zaqiyah'; // Ubah variabel $name

// Menampilkan variabel
echo "Nama saya $name";
echo "<br />";

// Menampilakan variable dengan HTML
echo "<h1 Style='color: blue'>Nama saya $name, umur saya $age tahun, berat saya $weight kg</h1>";
echo "<br>";

/*
    variable konstan
    variable yang tidak bisa di ubah nilainya
    1. Menggunakan define | define('fruit", "apel");
    2. Menggunakan const | const fruit = "apel";
*/
    define("SITE_NAME", "Elena");
    echo SITE_NAME;
?>
