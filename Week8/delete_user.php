<?php

$servername = "localhost";
$username = "root";   
$password = "";       
$dbname = "labdb"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

// If a delete request was sent
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['UserName'])) 
{
    $u = $_POST['UserName'];

    // delete that user
    $sql = "DELETE FROM user WHERE UserName = '$u'";

    if ($conn->query($sql) === TRUE) {
        $message = "Deleted user: $u";
    } else {
        $message = "Error deleting user: " . $conn->error;
    }
}

// Now always load the (updated) user list
$sql = "SELECT UserName, FirstName, LastName FROM user";
$result = $conn->query($sql);

?>
<html>
<body>

    <h1>Delete Users</h1>
    <p><a href="index.php">Back to Menu</a></p>

    <?php
    if ($message !== "") {
        echo "<p>" . htmlspecialchars($message) . "</p>";
    }
    ?>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Action</th>
        </tr>

        <?php
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                $u = htmlspecialchars($row['UserName']);
                $f = htmlspecialchars($row['FirstName']);
                $l = htmlspecialchars($row['LastName']);

                echo "<tr>";
                echo "<td>$u</td>";
                echo "<td>$f</td>";
                echo "<td>$l</td>";
                echo "<td>
                        <form method=\"post\" style=\"display:inline;\">
                            <input type=\"hidden\" name=\"UserName\" value=\"$u\">
                            <input type=\"submit\" value=\"Delete\" onclick=\"return confirm('Delete user: $u ?');\">
                        </form>
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
