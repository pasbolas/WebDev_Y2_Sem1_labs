<?php
    // array

    echo "<br>";

    echo "<h1> Question 2 </h1> <br>";
    $array1 = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"];

    // make a dictionary of the array

    $array_dict = array(
        "Japan" => "Tokyo", 
        "Mexico" => "Mexico City", 
        "USA" => "New York City",
        "India" => "Mumbai",
        "Korea" => "Seoul",
        "China" => "Shanghai",
        "Nigeria" => "Lagos"  ,
        "Argentina" => "Buenos Aires" ,
        "Egypt" => "Cairo",
        "England" => "London",
    );

    foreach ($array_dict as $country => $capital){
        echo  $capital. " is in ". $country . "<br />";
    };


?>