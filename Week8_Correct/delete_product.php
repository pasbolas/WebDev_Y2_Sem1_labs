
<h1> All Products </h1>
<a href= "index.php"> Go Back </a>
<br>


<table border="1" cellpadding="5" cellspacing="0">

    <tr>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Delete</th>
    </tr>


    <?php

        require_once 'database.php';


        // If a delete request was sent
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productID'])) 
        {
            $u = $_POST['productID'];

            // delete that user
            $sql = "DELETE FROM product WHERE productID = '$u'";

            if ($conn->query($sql) === TRUE) {
                $message = "Deleted ProductID: $u";
            } else {
                $message = "Error deleting user: " . $conn->error;
            }
        }

        $sql = "Select * from product;";

        $result = $conn -> query($sql);

        

        $firstProductName = ""; // store one product ID to send to edit
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                if ($firstProductName === "") {
                    $firstProductName = $row['PName']; // capture any product
                }

                $u = $row["productID"];

                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['productID']) . "</td>";
                echo "<td>" . htmlspecialchars($row['PName']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Description']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Price']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Stock']) . "</td>";

                echo "<td>
                            <form method=\"post\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"productID\" value=\"$u\">
                                <input type=\"submit\" value=\"Delete\" onclick=\"return confirm('Delete user: $u ?');\">
                            </form>
                        </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No Products found.</td></tr>";
        }

    ?>

</table>