<?php

    echo "<h1> Question 4 </h1> <br>";

    $my_array = array("red","green","blue","yellow","purple");
    $word = array("a","b","c");
    $word_cap = array("A","B","C");
    $number = array (1,2,3,4);
    $characters = array("#", "$", "%");

    shuffle($my_array);
    shuffle($word);
    shuffle($number);
    shuffle($characters);
    shuffle($word_cap);


    echo "<br> <h3>Your Password : </h3>";
    print_r($my_array[0] . $word[0] . $number[0] . $characters[0] . $word_cap[0]);

    echo "<br>";
?>