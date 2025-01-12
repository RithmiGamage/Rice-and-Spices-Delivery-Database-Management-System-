<?php 
include 'connect.php';
session_start(); 

if (isset($_POST['signUp'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $stmt = $conn->prepare("SELECT * FROM login WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        
        $stmt = $conn->prepare("INSERT INTO login (fName, lName, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fName, $lName, $email, $password);
        
        if ($stmt->execute()) {
            header("Location: log.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
    $stmt->close();
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM login WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['user_name'] = $row['fName']; 
            header("Location: welcome.php"); 
        } else {
            $_SESSION['error'] = "SORRY, TRY AGAIN";
            header("Location: error.php"); 
        }
    } else {
        $_SESSION['error'] = "SORRY, TRY AGAIN"; 
        header("Location: error.php");
    }
    $stmt->close();
}
?>
