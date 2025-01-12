document.addEventListener('DOMContentLoaded', () => {
    const cartItems = [];
    const cartItemsContainer = document.querySelector('.cart-items');
    const totalPriceElement = document.getElementById('total-price');

    function updateCart() {
        cartItemsContainer.innerHTML = '';
        let totalPrice = 0;

        cartItems.forEach(item => {
            const li = document.createElement('li');
            li.textContent = `${item.name} - ${item.quantity} KG - $${item.price.toFixed(2)}`;
            const removeLink = document.createElement('span');
            removeLink.textContent = ' [Remove]';
            removeLink.classList.add('remove-item');
            removeLink.addEventListener('click', () => {
                removeFromCart(item.name);
            });
            li.appendChild(removeLink);
            cartItemsContainer.appendChild(li);
            totalPrice += item.price;
        });

        totalPriceElement.textContent = totalPrice.toFixed(2);
    }

    function addToCart(product, price, quantity) {
        const existingItem = cartItems.find(item => item.name === product);

        if (existingItem) {
            existingItem.quantity += quantity;
            existingItem.price += price * quantity;
        } else {
            cartItems.push({
                name: product,
                price: price * quantity,
                quantity: quantity
            });
        }

        // AJAX request to add product to the cart
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "add_product.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(`product_name=${encodeURIComponent(product)}&quantity=${encodeURIComponent(quantity)}&price_per_kg=${encodeURIComponent(price)}`);

        xhr.onload = function () {
            if (xhr.status === 200) {
                console.log(xhr.responseText);
                updateCart();
            }
        };
    }

    function removeFromCart(product) {
        const itemIndex = cartItems.findIndex(item => item.name === product);

        if (itemIndex > -1) {
            cartItems.splice(itemIndex, 1);

            // AJAX request to remove product from the cart
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "remove_product.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send(`product_name=${encodeURIComponent(product)}`);

            xhr.onload = function () {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                    updateCart();
                }
            };
        }
    }

    document.querySelectorAll('.cart-button').forEach(button => {
        button.addEventListener('click', () => {
            const productElement = button.closest('.product');
            const product = productElement.dataset.product;
            const price = parseFloat(productElement.dataset.price);
            const quantity = parseFloat(productElement.querySelector('.quantity').value);

            if (quantity > 0) {
                addToCart(product, price, quantity);
            }
        });
    });

    document.querySelectorAll('.remove-button').forEach(button => {
        button.addEventListener('click', () => {
            const productElement = button.closest('.product');
            const product = productElement.dataset.product;
            removeFromCart(product);
        });
    });
});
