<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "gamagemillsheaven";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$product_name = $conn->real_escape_string($_POST['product_name']);
$quantity = floatval($_POST['quantity']); // Quantity in KG
$price_per_kg = floatval($_POST['price_per_kg']); // Price per KG

// Calculate total price
$total_price = $quantity * $price_per_kg;

// Insert into addtocart table
$sql = "INSERT INTO addtocart (product_name, quantity, price, total_price) 
        VALUES ('$product_name', '$quantity', '$price_per_kg', '$total_price')";

if ($conn->query($sql) === TRUE) {
    echo "Product added to cart successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
