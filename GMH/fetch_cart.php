<?php
include 'db_connect.php';

$sql = "SELECT product_name, quantity, price FROM addtocart";
$result = $conn->query($sql);

$cart = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cart[] = $row;
    }
}

echo json_encode($cart);
$conn->close();
?>
