
<?php
    include 'header.php';
?>

<form action= "post_q3.php" method = "post">
    Enter the current Hour (): 
    <input  type = "number" 
            name = "current_hour" 
            min= "0" 
            max = "23"
    >
    <br />
    <input type = "submit" value = "Submit">
</form>
