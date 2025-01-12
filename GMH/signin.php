<?php
session_start();
include 'connect.php';

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']); 

    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_name'] = $row['fName']; 
        header("Location: welcome.php"); 
        exit();
    } else {
        $_SESSION['error'] = "TRY AGAIN"; // Set error message
        header("Location: error.php"); 
        exit();
    }
}
?>
