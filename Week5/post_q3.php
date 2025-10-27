<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $hour = (int)$_POST["current_hour"];

    if ($hour < 10) {
        echo "<br>"."Have a good morning!";
    } 
    elseif ($hour < 18 && $hour > 10 )
    {
        echo "<br>"."Have a good day";
    }
    elseif ($hour < 23 && $hour > 18 )
    {
        echo "<br>"."Good Evening";
    }
    
    else {
        echo "<br>" ."Switch Off the computer!";
    };
}


?>