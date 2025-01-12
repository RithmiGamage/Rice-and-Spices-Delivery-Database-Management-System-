<?php
include 'dbconnect.php';  

$sql = "SELECT * FROM payment";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Full Name</th><th>Email</th><th>Address</th><th>City</th><th>State</th><th>Zip Code</th><th>Name on Card</th><th>Card Number</th><th>Exp Month</th><th>Exp Year</th><th>CVV</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["full_name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["city"] . "</td>";
        echo "<td>" . $row["state"] . "</td>";
        echo "<td>" . $row["zip_code"] . "</td>";
        echo "<td>" . $row["name_on_card"] . "</td>";
        echo "<td>" . $row["card_number"] . "</td>";
        echo "<td>" . $row["exp_month"] . "</td>";
        echo "<td>" . $row["exp_year"] . "</td>";
        echo "<td>" . $row["cvv"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>
