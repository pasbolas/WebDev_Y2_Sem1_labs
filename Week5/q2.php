<?php

    include 'header.php';
    $x = 5;
    // while loop
    while ( $x <= 40)
    {
        echo $x . " ";
        $x += 5;
    };

    // using do while loop
    echo "<br>"."Using do...while". "<br>";
    do {
        echo $x . " ";
        $x += 5;
    } while ( $x <= 40);

    // array
    echo "<br>";
    $array1 = ["PHP", "C++". "C#". "Python". "Java"];

    echo "<br> <h4> Arrays! </h4> <br />";
    foreach ($array1 as $text){
        echo "<h3>" . $text . "</h3>";
        echo " ";
    };

    // using array iterator
    
    $arrObject = new ArrayObject($array1);
    $arrayIterator = $arrObject->getIterator();
    while( $arrayIterator->valid() )
    {
        echo $arrayIterator->current() . "<br />";
        $arrayIterator->next();
    }


?>