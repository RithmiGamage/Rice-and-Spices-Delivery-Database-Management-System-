<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fbfcfa;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .heading {
            text-align: center;
            margin-bottom: 20px;
        }

        .heading h1 {
            font-size: 2.5em;
            color: #333;
        }

        .heading img {
            width: 50px;
            vertical-align: middle;
            margin-right: 10px;
        }

        .products-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 100px; 
        }

        .product {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 5px;
            text-align: center;
            width: 22%; 
            transition: transform 0.3s;
        }

        .product:hover {
            transform: translateY(-5px);
        }

        .product img {
            width: 100%;
            height: 200px; 
            object-fit: cover; 
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .product h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #555;
        }

        .product p {
            margin-bottom: 15px;
            color: #777;
        }

        .product label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .product .quantity {
            width: 80%;
            padding: 6px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        .cart-button, .remove-button, .payment-button {
            background-color: #3cb815;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        .cart-button:hover, .remove-button:hover {
            background-color: #ff7e00;
        }

        .remove-button {
            background-color: #f44336;
        }

        .remove-button:hover {
            background-color: #d32f2f;
        }

        .cart {
            position:absolute;
            top: 20px;
            right: 20px;
            background: #b0d1ae;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            z-index: 1000;
        }

        .cart h2 {
            font-size: 1.5em;
            margin-bottom: 15px;
        }

        .cart-items {
            list-style: none;
            padding: 0;
            margin: 0 0 20px;
        }

        .cart-items li {
            padding: 5px;
            border-bottom: 2px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-items li:last-child {
            border-bottom: none;
        }

        #total-price {
            font-size: 1.5em;
            font-weight: bold;
            color: #333;
            text-align: right;
        }

        .confirm-button, .delete-button {
            background-color: #3cb815;
            color: white;
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        .confirm-button:hover {
            background-color: #ff7e00;
        }

        .delete-button {
            background-color: red;
        }

        .delete-button:hover {
            background-color: #ff7e00;
        }

        .payment-button{
            background-color: #333;
            text-decoration: none;
        }

        .payment-button:hover{
            background-color: #ff7e00;
        }
    </style>
</head>
<body>
    <div class="heading">
        <h1><img src="img/logo.png" alt="Logo"> Choose Your Products</h1>
    </div>

    <div class="cart">
        <h2>Your Cart
        <i class='bx bxs-cart-add'>
        <a href="payment.php" class="payment-button">checkout</a></i></h2>
        <ul class="cart-items"></ul>
        <p>Total: $<span id="total-price">0</span></p>
        <button class="confirm-button">Confirm</button>
        <button class="delete-button">Delete</button>
    </div>

    <div class="products-container">
        <!-- Product 1 -->
        <div class="product" data-product="Turmeric Powder" data-price="5">
            <img src="img/turmeric2.jpg" alt="Turmeric Powder">
            <h2>Turmeric Powder</h2>
            <p>Price per KG: $5</p>
            <label for="quantity1">Quantity (KG):</label>
            <input type="number" id="quantity1" class="quantity" step="0.1" value="1" min="0.1" required>
            <button class="cart-button">
                <i class='bx bxs-cart-add'></i> Add to Cart
            </button>
            <button class="remove-button">
                <i class='bx bxs-trash'></i> Remove
            </button>
        </div>
        
        <!--Product 2-->
        <div class="product" data-product="Curry Powder" data-price="5">
            <img src="img/currypowder4.jpg" alt="Curry Powder">
            <h2>Curry Powder</h2>
            <p>Price per KG: $6.02</p>
            <label for="quantity1">Quantity (KG):</label>
            <input type="number" id="quantity1" class="quantity" step="0.1" value="1" min="0.1" required>
            <button class="cart-button">
                <i class='bx bxs-cart-add'></i> Add to Cart
            </button>
            <button class="remove-button">
                <i class='bx bxs-trash'></i> Remove
            </button>
        </div>

        <!-- Product 3 -->
        <div class="product" data-product="Chilli Powder" data-price="6.69">
            <img src="img/chilipowder2.jpg" alt="Chilli Powder">
            <h2>Chilli Powder</h2>
            <p>Price per KG: $6.69</p>
            <label for="quantity3">Quantity (KG):</label>
            <input type="number" id="quantity3" class="quantity" step="0.1" value="1" min="0.1" required>
            <button class="cart-button">
                <i class='bx bxs-cart-add'></i> Add to Cart
            </button>
            <button class="remove-button">
                <i class='bx bxs-trash'></i> Remove
            </button>
        </div>

        <!-- Product 4 -->
        <div class="product" data-product="Blackpepper Powder" data-price="13.37">
            <img src="img/papper2.jpg" alt="Blackpepper Powder">
            <h2>Blackpepper Powder</h2>
            <p>Price per KG: $13.37</p>
            <label for="quantity4">Quantity (KG):</label>
            <input type="number" id="quantity4" class="quantity" step="0.1" value="1" min="0.1" required>
            <button class="cart-button">
                <i class='bx bxs-cart-add'></i> Add to Cart
            </button>
            <button class="remove-button">
                <i class='bx bxs-trash'></i> Remove
            </button>
        </div>

        <!-- Product 5 -->
        <div class="product" data-product="Chilli Flakes" data-price="10.03">
            <img src="img/chiliflaxes2.jpg" alt="Chilli Flakes">
            <h2>Chilli Flakes</h2>
            <p>Price per KG: $10.03</p>
            <label for="quantity5">Quantity (KG):</label>
            <input type="number" id="quantity5" class="quantity" step="0.1" value="1" min="0.1" required>
            <button class="cart-button">
                <i class='bx bxs-cart-add'></i> Add to Cart
            </button>
            <button class="remove-button">
                <i class='bx bxs-trash'></i> Remove
            </button>
        </div>

        <!-- Product 6 -->
        <div class="product" data-product="Cinnamon Powder" data-price="11.74">
            <img src="img/cinamon2.jpg" alt="Cinnamon Powder">
            <h2>Cinnamon Powder</h2>
            <p>Price per KG: $11.74</p>
            <label for="quantity6">Quantity (KG):</label>
            <input type="number" id="quantity6" class="quantity" step="0.1" value="1" min="0.1" required>
            <button class="cart-button">
                <i class='bx bxs-cart-add'></i> Add to Cart
            </button>
            <button class="remove-button">
                <i class='bx bxs-trash'></i> Remove
            </button>
        </div>

        <!-- Product 7 -->
        <div class="product" data-product="Rice Flour" data-price="4.01">
            <img src="img/riceflour3.jpg" alt="Rice Flour">
            <h2>Rice Flour</h2>
            <p>Price per KG: $4.01</p>
            <label for="quantity7">Quantity (KG):</label>
            <input type="number" id="quantity7" class="quantity" step="0.1" value="1" min="0.1" required>
            <button class="cart-button">
                <i class='bx bxs-cart-add'></i> Add to Cart
            </button>
            <button class="remove-button">
                <i class='bx bxs-trash'></i> Remove
            </button>
        </div>

        <!-- Product 8 -->
        <div class="product" data-product="Kurakkan Flour" data-price="7.02">
            <img src="img/kurakkanflour2.jpg" alt="Kurakkan Flour">
            <h2>Kurakkan Flour</h2>
            <p>Price per KG: $7.02</p>
            <label for="quantity8">Quantity (KG):</label>
            <input type="number" id="quantity8" class="quantity" step="0.1" value="1" min="0.1" required>
            <button class="cart-button">
                <i class='bx bxs-cart-add'></i> Add to Cart
            </button>
            <button class="remove-button">
                <i class='bx bxs-trash'></i> Remove
            </button>
        </div>

        <!-- Product 9 -->
        <div class="product" data-product="Red Rice" data-price="2.75">
            <img src="img/redrice2.jpg" alt="Red Rice">
            <h2>Red Rice</h2>
            <p>Price per KG: $2.75</p>
            <label for="quantity9">Quantity (KG):</label>
            <input type="number" id="quantity9" class="quantity" step="0.1" value="1" min="0.1" required>
            <button class="cart-button">
                <i class='bx bxs-cart-add'></i> Add to Cart
            </button>
            <button class="remove-button">
                <i class='bx bxs-trash'></i> Remove
            </button>
        </div>

        <!-- Product 10 -->
        <div class="product" data-product="White Rice" data-price="3.00">
            <img src="img/whiterice2.png" alt="White Rice">
            <h2>White Rice</h2>
            <p>Price per KG: $3.00</p>
            <label for="quantity10">Quantity (KG):</label>
            <input type="number" id="quantity10" class="quantity" step="0.1" value="1" min="0.1" required>
            <button class="cart-button">
                <i class='bx bxs-cart-add'></i> Add to Cart
            </button>
            <button class="remove-button">
                <i class='bx bxs-trash'></i> Remove
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cartItemsContainer = document.querySelector('.cart-items');
            const totalPriceElement = document.getElementById('total-price');
            let totalPrice = 0;
            const cart = {};

            function updateCart(product, quantity, price) {
                const itemPrice = price * quantity;
                if (cart[product]) {
                    cart[product].quantity += quantity;
                    cart[product].totalPrice += itemPrice;
                } else {
                    cart[product] = { quantity: quantity, totalPrice: itemPrice };
                }
                renderCart();
            }

            function renderCart() {
                cartItemsContainer.innerHTML = '';
                totalPrice = 0;

                for (const product in cart) {
                    const { quantity, totalPrice: itemTotalPrice } = cart[product];
                    const item = document.createElement('li');
                    item.textContent = `${product} - ${quantity} KG - $${itemTotalPrice.toFixed(2)}`;
                    cartItemsContainer.appendChild(item);
                    totalPrice += itemTotalPrice;
                }

                totalPriceElement.textContent = totalPrice.toFixed(2);
            }

            function handleCartAction(product, quantity, price, action) {
                const formData = new FormData();
                formData.append('product_name', product);
                formData.append('quantity', quantity);
                formData.append('price_per_kg', price);

                fetch(action === 'add' ? 'add_to_cart.php' : 'remove_from_cart.php', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.text())
                .then(data => {
                    console.log(data);
                    if (action === 'add') {
                        updateCart(product, quantity, price);
                    } else {
                        delete cart[product];
                        renderCart();
                    }
                })
                .catch(error => console.error('Error:', error));
            }

            document.querySelectorAll('.cart-button').forEach(button => {
                button.addEventListener('click', () => {
                    const productElement = button.closest('.product');
                    const product = productElement.dataset.product;
                    const price = parseFloat(productElement.dataset.price);
                    const quantity = parseFloat(productElement.querySelector('.quantity').value);
                    handleCartAction(product, quantity, price, 'add');
                });
            });

            document.querySelectorAll('.remove-button').forEach(button => {
                button.addEventListener('click', () => {
                    const productElement = button.closest('.product');
                    const product = productElement.dataset.product;
                    handleCartAction(product, 0, 0, 'remove');
                });
            });

            document.querySelector('.confirm-button').addEventListener('click', () => {
                alert('Order confirmed! Thank you for your purchase.');
            });

            document.querySelector('.delete-button').addEventListener('click', () => {
                if (confirm('Are you sure you want to delete all items from the cart?')) {
                    cartItemsContainer.innerHTML = '';
                    totalPrice = 0;
                    totalPriceElement.textContent = totalPrice.toFixed(2);
                    // Clear the cart object
                    Object.keys(cart).forEach(key => delete cart[key]);
                }
            });
        });
    </script>
</body>
</html>
