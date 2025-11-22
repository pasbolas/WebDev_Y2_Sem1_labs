<?php

$servername = "localhost";
$username = "root";   
$password = "";       
$dbname = "labdb"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT UserName, FirstName, LastName FROM user";
$result = $conn->query($sql);

?>
<html>
<body>

<h1>All Users</h1>
<p><a href="index.php">Back to Menu</a></p>

<table border="1" cellpadding="5" cellspacing="0">

    <tr>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>

    <?php
    $firstUserName = ""; // store one user ID to send to edit
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            if ($firstUserName === "") {
                $firstUserName = $row['UserName']; // capture any ID
            }

            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['UserName']) . "</td>";
            echo "<td>" . htmlspecialchars($row['FirstName']) . "</td>";
            echo "<td>" . htmlspecialchars($row['LastName']) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No users found.</td></tr>";
    }
    ?>
    

</table>

</body>
</html>

<?php
$conn->close();
?>
