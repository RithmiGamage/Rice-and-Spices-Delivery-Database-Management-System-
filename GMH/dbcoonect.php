<?php
$conn = new mysqli('localhost', 'username', 'password', 'gamagemillsheaven');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
