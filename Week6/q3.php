<?php

    echo "<h1> Question 3 </h1> <br>";
    
    $file = fopen("test/lab6.1.txt", "r") or exit("Unable to open file!");

    //Output a line of the file until the end is reached

    echo "<br><h1>Lab 6.1 Content </h1> </br>";
    
    while(!feof($file))
    {
        echo fgets($file). "<br>";  
    }
    fclose($file);


    $file1 = fopen("test/lab6.2.txt", "r") or exit("Unable to open file!");

    //Output a line of the file until the end is reached

    echo "<br><h1>Lab 6.1 + Lab6.2 Content </h1> </br>";
    
    while(!feof($file1))
    {
        echo fgets($file1). "<br>";  
    }
    fclose($file1);


?>