<?php 
   
    // Import class Balok
    require_once 'class_balok.php';

    // Object 1
    $balok1 = new Balok(29, 16, 7);
    echo "Object 1: <br>";
    echo "Luas: " . $balok1->getLuas() . "<br>";
    echo "Keliling: " . $balok1->getKeliling() . "<br>";
    echo "Volume: " . $balok1->getVolume() . "<br><br>";

    // Object 2
    $balok2 = new Balok(20, 10, 5);
    echo "Object 2: <br>";
    echo "Luas: " . $balok2->getLuas() . "<br>";
    echo "Keliling: " . $balok2->getKeliling() . "<br>";
    echo "Volume: " . $balok2->getVolume() . "<br><br>";

    // Object 3
    $balok3 = new Balok(15, 12, 8);
    echo "Object 3: <br>";
    echo "Luas: " . $balok3->getLuas() . "<br>";
    echo "Keliling: " . $balok3->getKeliling() . "<br>";
    echo "Volume: " . $balok3->getVolume() . "<br><br>";

    // Object 4
    $balok4 = new Balok(25, 18, 6);
    echo "Object 4: <br>";
    echo "Luas: " . $balok4->getLuas() . "<br>";
    echo "Keliling: " . $balok4->getKeliling() . "<br>";
    echo "Volume: " . $balok4->getVolume() . "<br><br>";
?>