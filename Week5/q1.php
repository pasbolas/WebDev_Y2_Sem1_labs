<?php

    include 'header.php';
    $hour = gmDate("H");

    if ($hour < 10) {
        echo "<br>"."Have a good morning!";
    } 
    elseif ($hour < 20 && $hour > 10 )
    {
        echo "<br>"."Have a godd day!";
    } else {
        echo "<br>" ."Have a good night!";
    };

    <br>


?>