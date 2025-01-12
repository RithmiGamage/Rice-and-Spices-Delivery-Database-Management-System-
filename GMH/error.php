<?php
session_start();
if (!isset($_SESSION['error'])) {
    header('Location: log.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #94e1a6;
            font-family: "Poppins", sans-serif;
        }
        .error-message {
            font-size: 2.5rem;
            font-weight: bold;
            color: #FF0000;
        }
    </style>
</head>
<body>
    <div class="error-message">
        <?php echo $_SESSION['error']; ?>
    </div>

    <script>
        setTimeout(function () {
            window.location.href = 'log.php';
        }, 3000); // Show error message for 3 seconds, then redirect back to login
    </script>
</body>
</html>
