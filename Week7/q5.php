<?php

$servername = "localhost";
$username = "root";   
$password = "";       
$dbname = "labdb"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// we are checking the connection here
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

if (isset($_GET['UserName'])) {

    $editing = true;
    $UserName = $_GET['UserName'];

    $sql = "SELECT * FROM user WHERE UserName='$UserName'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $Password  = $row['Password'];
        $FirstName = $row['FirstName'];
        $LastName  = $row['LastName'];
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

    <a href="../Week8/index.php">Menu</a>
</html>
