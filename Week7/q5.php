<?php

$servername = "localhost";
$username = "root";   
$password = "";       
$dbname = "labdb"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// we are handling submission of forms
if (isset($_POST['UserName']) && isset($_POST['Password']) && isset($_POST['FirstName']) && isset($_POST['LastName'])) {

    $u = $_POST['UserName'];
    $p = $_POST['Password'];
    $f = $_POST['FirstName'];
    $s = $_POST['LastName'];



    $sql = "INSERT INTO user (UserName, Password, FirstName, LastName)
            VALUES ('$u', '$p', '$f', '$s')";

    if ($conn->query($sql) === TRUE) {
        echo "User added successfully!";
    } else {
        echo "Error: Username already exists!";
    }
}

$conn->close();
?>

<html>
    <p>Add A New User</p>
    <form method="post">
        <p>Username:
        <input type="text" name="UserName"></p>
        
        <p>Password:
        <input type="password" name="Password"></p>
        
        <p>FirstName:
        <input type="text" name="FirstName"></p>

        <p>LastName:
        <input type="text" name="LastName"></p>
        
        <p><input type="submit" value="Add New"/></p>
    </form>
</html>
