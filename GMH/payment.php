<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body>
<div class="container">

    <form action="process_payment.php" method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">COMPLETE ALL</h3>

                <div class="inputBox">
                    <span>Full Name :</span>
                    <input type="text" name="full_name" placeholder="John Doe" required>
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" name="email" placeholder="example@example.com" required>
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" name="address" placeholder="Room - Street - Locality" required>
                </div>
                <div class="inputBox">
                    <span>Telephone :</span>
                    <input type="text" name="phone_num" placeholder="+94 77xxxxxxx" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>City :</span>
                        <input type="text" name="city" placeholder="India" required>
                    </div>
                    <div class="inputBox">
                        <span>Zip Code :</span>
                        <input type="text" name="zip_code" placeholder="123456" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">Payment</h3>

                <div class="inputBox">
                    <span>Cards Accepted :</span>
                    <img src="card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Name on Card :</span>
                    <input type="text" name="name_on_card" placeholder="Mr. John Doe" required>
                </div>

                <div class="inputBox">
                    <span>Card Number :</span>
                    <input type="text" name="card_num" placeholder="11-2222-3333" required>
                </div>
                
                <div class="inputBox">
                    <span>Exp Month :</span>
                    <input type="text" name="exp_month" placeholder="January" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Exp Year :</span>
                        <input type="number" name="exp_year" placeholder="2022" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="123" required>
                    </div>
                    
                </div>

            </div>
    
        </div>

        <input type="submit" value="Proceed to Checkout" class="submit-btn">

    </form>

</div>    
    
</body>
</html>
