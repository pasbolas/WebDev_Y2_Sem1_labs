<?php
    // array
    echo "<br>";

    echo "<h1> Question 1 </h1> <br>";
    
    $array1 = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"];

    $temp_array_1 = $array1;
    echo "<br> <h4> Arrays! </h4> <br />";

    echo "<br> <h4> Unsorted Array! </h4> <br />";

    foreach ($array1 as $text){
        echo " " . $text . ", ";
        echo " ";
    };

    echo "<br> <h4> Sorted Array! </h4> <br />";

    // sort the array
    sort($array1);

    foreach ($array1 as $text1){
        echo " " . $text1 . ", ";
        echo " ";
    };

    // adding values to array

    array_push($temp_array_1, "Los Angeles", "Calcutta", "Osaka", "Beijing");

    $temp_array_1_1 = $temp_array_1;

    // Sorting Array unsorted

    sort($temp_array_1_1);
    
    echo "<br> <h4> Unsorted Array! </h4> <br />";

    // printing unordered list
    foreach ($temp_array_1 as $text1){
        echo " " . $text1 . ", ";
        echo " ";
    };




?>