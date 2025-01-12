<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamagemillsheaven";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$product_name = $conn->real_escape_string($_POST['product_name']);

// SQL to delete the product from addtocart table
$sql = "DELETE FROM addtocart WHERE product_name = '$product_name'";

if ($conn->query($sql) === TRUE) {
    echo "Product removed from cart successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
