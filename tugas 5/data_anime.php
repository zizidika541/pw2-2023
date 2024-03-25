<?php
    require_once 'class_anime.php';

    $shounen = new Shounen("Naruto Shippuden", "Action, Comedy, Martial Arts, Adventure", "Feb 15, 2007");
    $seinen = new Seinen("One Punch Man", "Action, Comedy, Parody, Super Power", "MadHouse");
    $shoujo = new Shoujo("Akatsuki no Yona", "Action, Romance, Fantasy, Adventure", "Oct 7, 2014");

    echo "Info Anime Shounen:<br>";
    $shounen->getInfo();
    echo "<br>";

    echo "Info Anime Seinen:<br>";
    $seinen->getInfo();
    echo "<br>";

    echo "Info Anime Shoujo:<br>";
    $shoujo->getInfo();
    echo "<br>";
?>