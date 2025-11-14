<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "labdb";
    // Create connection
        $conn = new mysqli($servername,$username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT ProductID, PName, Description , Price, Stock FROM product";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
        {
        echo "ProductID: " . $row["ProductID"].
        " - PName: " . $row["PName"].
        " - Description: " . $row["Description"].
        " - Price: " . $row["Price"].
        " - Stock: " . $row["Stock"].
        "<br>";
    }}
    else 
    {
        echo "0 results";
    }
    $conn->close();
?>