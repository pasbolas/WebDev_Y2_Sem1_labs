<?php
    require_once "database.php";
    if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $n = $_POST['name'];
        $e = $_POST['email'];
        $p = $_POST['password'];
        $sql = "INSERT INTO user (UserName, Password, email)
        VALUES ('$n', '$p', '$e')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error; }
        $conn->close(); 
    }
?>
