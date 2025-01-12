<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header('Location: log.php'); // Redirect to login if session is not set
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #94e1a6;
            font-family: "Poppins", sans-serif;
        }
        .welcome-message {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="welcome-message">
        WELCOME <?php echo strtoupper($_SESSION['user_name']); ?>!!
    </div>

    <script>
        setTimeout(function () {
            window.location.href = 'home.php';
        }, 3000); // 3 minutes
    </script>
</body>
</html>
