<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #c2e2b8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .message {
            text-align: center;
            padding: 40px;
            background-color: #f0f8ff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .message h1 {
            color: #28a745;
            font-size: 2.5rem;
        }
        .message p {
            color: #333;
            font-size: 1.2rem;
        }
        .success-icon {
            font-size: 4rem;
            color: #28a745;
            margin-bottom: 20px;
            animation: bounceIn 1s ease-in-out;
        }
        @keyframes bounceIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }
        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 30px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 50px;
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #ff7e00;
        }
    </style>
</head>
<body>

    <div class="message">
        <div class="success-icon">✔</div>
        <h1>Payment Successful!</h1>
        <p>Your payment has been processed successfully.</p>
        <a href="home.php" class="button">Go to Homepage</a>
    </div>

</body>
</html>
