<?php

$servername = 'localhost'; 
$db_name = 'gamagemillsheaven'; 
$username = 'root'; 
$password = ''; 

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone_num = $_POST['phone_num'];
$city = $_POST['city'];
$zip_code = $_POST['zip_code'];
$name_on_card = $_POST['name_on_card'];
$card_num = $_POST['card_num'];
$exp_month = $_POST['exp_month'];
$exp_year = $_POST['exp_year'];
$cvv = $_POST['cvv'];

$sql = "INSERT INTO payments (full_name, email, address, phone_num, city, zip_code, name_on_card, card_num, exp_month, exp_year, cvv)
         VALUES ('$full_name', '$email', '$address', '$phone_num', '$city', '$zip_code', '$name_on_card', '$card_num', '$exp_month', '$exp_year', '$cvv')";
 
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Payment successful!'); window.location.href='success.php';</script>";
} else {
    echo "Error: " . $sql. "<br>" . $conn->error;
}

$conn->close();
?>