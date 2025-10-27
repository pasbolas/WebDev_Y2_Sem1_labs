<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $num= (int)$_POST["num"];

    $start_num = 0;

    while ( $start_num <= $num)
    {
        echo "
        <p style='font-size:".$start_num. "px;'>
            Hello PHP!
            <br/>
        </p>";
        $start_num += 1;
    };
}


?>