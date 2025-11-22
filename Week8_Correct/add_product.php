<?php
    require_once "database.php";

    if (isset($_POST['product_name']) && 
        isset($_POST['description']) && 
        isset($_POST['price']) && 
        isset($_POST['stock']))
    {

        $n = $conn -> real_escape_string($_POST['product_name']);
        $d = $conn -> real_escape_string($_POST['description']);
        $p = $conn -> real_escape_string($_POST['price']);
        $s = $conn -> real_escape_string($_POST['stock']);

        $sql = "Insert into product (PName, Description, Price, Stock)
        VALUES ('$n', '$d', '$p', '$s');";

        $conn -> query($sql);

        echo 'Success <a href="index.php"> Continue... </a>';
        return;

    }
?>


<html>
    <h1> Enter Product Details </h1>
    <form method = "post">
        <p> Product Name:
            <input type="text" name = "product_name">
        </p>
        <p> 
            Product Description: 
            <input type="text" name = "description">
        </p>
        <p> 
            Product Price: 
            <input type="text" name = "price">
        </p>
        <p> 
            Product Stock: 
            <input type="text" name = "stock">
        </p>

        <p>
            <input type="submit" value="Add new"/>
            <a href="index.php"> Cancel </a> 
        </p>
        
</html>