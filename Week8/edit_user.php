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
<p><a href="add_user.php">Add New User</a></p>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Edit</th>
    </tr>

    <?php
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $u = htmlspecialchars($row['UserName']);

            echo "<tr>";
            echo "<td>" . $u . "</td>";
            echo "<td>" . htmlspecialchars($row['FirstName']) . "</td>";
            echo "<td>" . htmlspecialchars($row['LastName']) . "</td>";

            echo "<td>
                    <a href='../Week7/q5.php?UserName=$u'>Edit</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No users found.</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
$conn->close();
?>
