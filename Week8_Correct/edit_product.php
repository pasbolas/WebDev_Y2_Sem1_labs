
<h1> All Products </h1>
<a href= "index.php"> Go Back </a>
<table border="1" cellpadding="5" cellspacing="0">

    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
        <th> Action </th>
    </tr>

<?php

    require_once 'database.php';

    $sql = "Select * from product;";

    $result = $conn -> query($sql);

    $firstProductName = ""; // store one product ID to send to edit
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            if ($firstProductName === "") {
                $firstProductName = $row['PName']; // capture any product
            }

            $u = $row['productID'];

            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['productID']) . "</td>";
            echo "<td>" . htmlspecialchars($row['PName']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Description']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Price']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Stock']) . "</td>";
            echo "<td> <a href='add_product.php?productID=$u'>Edit</a> </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No Products found.</td></tr>";
    }

?>

</table>