
<?php
    include 'header.php';
?>

<form action= "post_q4.php" method = "post">
    Enter the current Hour (): 
    <input  type = "number" 
            name = "num" 
            min= "0" 
            max = "23"
    >
    <br />
    <input type = "submit" value = "Submit">
</form>