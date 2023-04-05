<?php
    require_once "class_kendaraan.php";
        
    $motor = new Motor("Motor", "Bensi", 2);
    $submarine = new Submarine("Kapal Selam", "Biogas", 700);

    echo "Info Motor:<br>";
    $motor->getInfo();
    echo "<br>";
    
    echo "Info Submarine:<br>";
    $submarine->getInfo();
    echo "<br>";
?>