<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './partials/header.php' ?>
    <title>Checkout</title>
    <style>
    .cart-button {
        background-color: white;
        color: #ff4d4d;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        text-decoration: none;
    }

    main {
        margin-top: 80px;
        padding: 2rem;
        background-color: #fff;
        max-width: 1200px;
        margin: 80px auto;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .tabs {
        display: flex;
        justify-content: space-around;
        margin-bottom: 2rem;
        background-color: #f1f1f1;
        padding: 1rem;
        border-radius: 10px;
    }

    .tab-link {
        background: none;
        border: none;
        padding: 1rem 2rem;
        cursor: pointer;
        font-size: 1rem;
        font-weight: bold;
        color: #555;
    }

    .tab-link.active {
        background-color: #ff4d4d;
        color: white;
        border-radius: 5px;
    }

    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }

    .cart-section,
    .shipping-section,
    .payment-section {
        padding: 1.5rem;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        background-color: #fff;
    }

    .cart-section h2 {
        margin: 32px 0;
    }

    .cart-items {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid #e0e0e0;
    }

    .cart-item img {
        width: 80px;
        height: 80px;
        margin-right: 1rem;
        border-radius: 10px;
        border: 1px solid #ddd;
    }

    .cart-item h4 {
        margin: 0;
        font-size: 1rem;
        font-weight: bold;
    }

    .summary {
        background-color: #f9f9f9;
        padding: 1rem;
        border-radius: 10px;
        text-align: right;
    }

    .summary p,
    .summary h4 {
        margin: 0.5rem 0;
        font-size: 1rem;
    }

    .summary h4 {
        font-weight: bold;
        color: #333;
    }

    button {
        background-color: #ff4d4d;
        color: white;
        border: none;
        padding: 0.7rem 1.5rem;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        margin-top: 1rem;
    }

    button:hover {
        background-color: #e63a3a;
    }


    .shipping-section {
        background-color: #fff;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 600px;
    }

    .shipping-section h2 {
        margin-bottom: 1.5rem;
        font-size: 1.8rem;
        color: #333;
    }

    form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    form input[type="text"] {
        padding: 0.75rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1rem;
        color: #555;
        width: 100%;
    }

    form input[type="text"]::placeholder {
        color: #bbb;
    }

    form input[type="text"]:focus {
        outline: none;
        border-color: #ff4d4d;
        box-shadow: 0 0 5px rgba(255, 77, 77, 0.5);
    }

    .shipping-options {
        grid-column: 1 / 3;
        display: flex;
        justify-content: space-between;
        margin-top: 1rem;
    }

    .shipping-option {
        display: flex;
        align-items: center;
        padding: 1rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 48%;
        cursor: pointer;
        background-color: #f9f9f9;
        transition: border-color 0.3s;
    }

    .shipping-option input {
        margin-right: 0.5rem;
    }

    .shipping-option:hover {
        background-color: #f1f1f1;
    }

    .shipping-option.active {
        border-color: #ff4d4d;
        background-color: #fef4f4;
    }

    .shipping-option span {
        font-size: 0.9rem;
        color: #777;
        display: block;
    }

    .buttons {
        grid-column: 1 / 3;
        display: flex;
        justify-content: space-between;
        margin-top: 1.5rem;
    }

    .buttons button {
        padding: 0.75rem 2rem;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
    }

    .buttons .next {
        background-color: #ff4d4d;
        color: white;
    }

    .buttons .next:hover {
        background-color: #e63a3a;
    }

    .buttons .cancel {
        background-color: #e0e0e0;
        color: #555;
    }

    .buttons .cancel:hover {
        background-color: #d6d6d6;
    }
    </style>
</head>

<body>
    <section>
        <?php include './partials/navbar.php'; ?>
        <?php include './partials/login-popup.php';?>
    </section>

    <main>
        <div class="tabs">
            <button class="tab-link active" onclick="openTab(event, 'shopping-cart')">1. Shopping Cart</button>
            <button class="tab-link" onclick="openTab(event, 'shipping-details')">2. Shipping Details</button>
            <button class="tab-link" onclick="openTab(event, 'payment-options')">3. Payment Options</button>
        </div>

        <div id="shopping-cart" class="tab-content active">
            <section class="cart-section">
                <h2>Shopping Cart</h2>
                <div class="cart-items">
                    <img src="./images/backpack01.png" alt="Product Image">
                    <div>
                        <h4>Product Name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p><strong>Rs 1000/-</strong></p>
                    </div>
                    <select>
                        <option>1 pcs</option>
                        <option>2 pcs</option>
                        <option>3 pcs</option>
                    </select>
                </div>
                <div class="summary">
                    <p>Enter Coupon Code</p>
                    <p>Subtotal: Rs 2000/-</p>
                    <p>Shipping: Free</p>
                    <p>Taxes: Rs 100/-</p>
                    <h4>Total: Rs 2100/-</h4>
                </div>
                <button id="shoppingcartBtn" onclick="openTab(event, 'shipping-details')">Next</button>
            </section>
        </div>

        <div id="shipping-details" class="tab-content">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                <!-- Shipping Details Section -->
                <section class="shipping-section">
                    <h2>Shipping Details</h2>
                    <form>
                        <input type="text" placeholder="First Name">
                        <input type="text" placeholder="Last Name">
                        <input type="text" placeholder="Address">
                        <input type="text" placeholder="Address 2">
                        <input type="text" placeholder="Country">
                        <input type="text" placeholder="City">
                        <input type="text" placeholder="ZIP/POSTAL CODE">
                        <input type="text" placeholder="Phone Number">
                        <div class="shipping-options">
                            <label class="shipping-option active">
                                <input type="radio" name="shipping" checked>
                                <div>
                                    Free Shipping
                                    <span>Between 2–5 working days</span>
                                </div>
                            </label>
                            <label class="shipping-option">
                                <input type="radio" name="shipping">
                                <div>
                                    Next Day Delivery
                                    <span>24 hours from checkout (Extra 500 rupees)</span>
                                </div>
                            </label>
                        </div>
                        <div class="buttons">
                            <button id="shippingdetailsBtn" type="button"
                                onclick="openTab(event, 'payment-options')">Next</button>
                            <button type="button" class="cancel">Cancel</button>
                        </div>
                    </form>
                </section>
                <section class="summary-section">
                    <h2>Summary</h2>
                    <div class="summary">
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                            <img src="./images/backpack01.png" alt="Product Name"
                                style="width: 50px; height: 50px; border-radius: 5px;">
                            <p>Product Name</p>
                            <p>Rs. 1000/-</p>
                        </div>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                            <img src="./images/backpack01.png" alt="Product Name"
                                style="width: 50px; height: 50px; border-radius: 5px;">
                            <p>Product Name</p>
                            <p>Rs. 1000/-</p>
                        </div>
                        <div style="margin-bottom: 1rem; border-top: 1px solid #ddd; padding-top: 1rem;">
                            <p>Have a Voucher?</p>
                            <select style="width: 100%; padding: 0.5rem; border-radius: 5px; border: 1px solid #ccc;">
                                <option>Apply Voucher</option>
                                <option>Voucher 1</option>
                                <option>Voucher 2</option>
                            </select>
                        </div>
                        <div>
                            <p style="display: flex; justify-content: space-between; font-size: 1rem; margin: 0;">
                                <span>Subtotal:</span>
                                <span>Rs. 2000/-</span>
                            </p>
                            <p style="display: flex; justify-content: space-between; font-size: 1rem; margin: 0;">
                                <span>Shipping:</span>
                                <span>Free</span>
                            </p>
                            <p style="display: flex; justify-content: space-between; font-size: 1rem; margin: 0;">
                                <span>Taxes:</span>
                                <span>Rs. 100/-</span>
                            </p>
                        </div>
                        <h3
                            style="display: flex; justify-content: space-between; font-size: 1.2rem; font-weight: bold; margin-top: 1rem;">
                            <span>Total:</span>
                            <span>Rs. 2100/-</span>
                        </h3>
                    </div>
                </section>
            </div>
        </div>
        <div id="payment-options" class="tab-content">
            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem;">
                <!-- Payment Method Section -->
                <section
                    style="background-color: #fff; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <h2 style="margin-bottom: 1.5rem; font-size: 1.8rem; color: #333;">Payment Method</h2>
                    <form>
                        <!-- Credit Card Option -->
                        <label class="payment-option"
                            style="display: block; padding: 1.5rem; border: 2px solid #ff4d4d; border-radius: 10px; margin-bottom: 1rem; cursor: pointer; background-color: #f9f9f9;">
                            <input type="radio" name="payment-method" checked style="display: none;">
                            <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                                <h4 style="margin: 0; font-size: 1.2rem; font-weight: bold; color: #333;">Credit Card
                                </h4>
                                <p style="margin: 0; font-size: 0.9rem; color: #777;">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.</p>
                                <div
                                    style="display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 1rem; margin-top: 1rem;">
                                    <input type="text" placeholder="0000 0000 0000 0000"
                                        style="padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                                    <input type="text" placeholder="MM/YY"
                                        style="padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                                    <input type="text" placeholder="CVV"
                                        style="padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                                </div>
                                <input type="text" placeholder="Card Holder Name"
                                    style="margin-top: 1rem; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                            </div>
                        </label>

                        <!-- PayPal Option -->
                        <label class="payment-option"
                            style="display: block; padding: 1.5rem; border: 2px solid #ddd; border-radius: 10px; margin-bottom: 1rem; cursor: pointer; background-color: #f9f9f9;">
                            <input type="radio" name="payment-method" style="display: none;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <div>
                                    <h4 style="margin: 0; font-size: 1.2rem; font-weight: bold; color: #333;">PayPal
                                    </h4>
                                    <p style="margin: 0; font-size: 0.9rem; color: #777;">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.</p>
                                </div>
                                <img src="./images/paypal-logo.png" alt="PayPal Logo" style="width: 50px;">
                            </div>
                        </label>

                        <div style="display: flex; justify-content: space-between; margin-top: 1.5rem;">
                            <button type="button"
                                style="padding: 0.75rem 2rem; border: none; border-radius: 5px; font-size: 1rem; background-color: #ff4d4d; color: white; cursor: pointer;">Pay
                                Now</button>
                            <button type="button"
                                style="padding: 0.75rem 2rem; border: none; border-radius: 5px; font-size: 1rem; background-color: #e0e0e0; color: #555; cursor: pointer;">Cancel</button>
                        </div>
                    </form>
                </section>

                <!-- Summary Section -->
                <section
                    style="background-color: #fff; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <h2 style="margin-bottom: 1.5rem; font-size: 1.8rem; color: #333;">Summary</h2>
                    <div>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                            <img src="./images/backpack01.png" alt="Product Name"
                                style="width: 50px; height: 50px; border-radius: 5px;">
                            <p style="margin: 0; font-size: 1rem; color: #333;">Product Name</p>
                            <p style="margin: 0; font-size: 1rem; color: #333;">Rs. 1000/-</p>
                        </div>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                            <img src="./images/backpack01.png" alt="Product Name"
                                style="width: 50px; height: 50px; border-radius: 5px;">
                            <p style="margin: 0; font-size: 1rem; color: #333;">Product Name</p>
                            <p style="margin: 0; font-size: 1rem; color: #333;">Rs. 1000/-</p>
                        </div>
                        <div style="margin-bottom: 1rem; border-top: 1px solid #ddd; padding-top: 1rem;">
                            <p style="margin: 0; font-size: 1rem; color: #333;">Have a Voucher?</p>
                            <select
                                style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                                <option>Apply Voucher</option>
                                <option>Voucher 1</option>
                                <option>Voucher 2</option>
                            </select>
                        </div>
                        <div>
                            <p style="display: flex; justify-content: space-between; font-size: 1rem; margin: 0;">
                                <span>Subtotal:</span>
                                <span>Rs. 2000/-</span>
                            </p>
                            <p style="display: flex; justify-content: space-between; font-size: 1rem; margin: 0;">
                                <span>Shipping:</span>
                                <span>Free</span>
                            </p>
                            <p style="display: flex; justify-content: space-between; font-size: 1rem; margin: 0;">
                                <span>Taxes:</span>
                                <span>Rs. 100/-</span>
                            </p>
                        </div>
                        <h3
                            style="display: flex; justify-content: space-between; font-size: 1.2rem; font-weight: bold; margin-top: 1rem;">
                            <span>Total:</span>
                            <span>Rs. 2100/-</span>
                        </h3>
                    </div>
                </section>
            </div>
        </div>



    </main>

    <section>
        <?php include './partials/footer.php'; ?>
    </section>

    <script>
    function openTab(event, tabId) {
        const tabs = document.querySelectorAll('.tab-content');
        const tabLinks = document.querySelectorAll('.tab-link');

        tabs.forEach(tab => tab.classList.remove('active'));
        tabLinks.forEach(link => link.classList.remove('active'));

        document.getElementById(tabId).classList.add('active');

        if (event) {
            event.currentTarget.classList.add('active');
        }
    }

    document.querySelector('#shoppingcartBtn').addEventListener('click', function() {
        document.querySelector('.tab-link:nth-child(2)').click();
    });

    document.querySelector('#shippingdetailsBtn').addEventListener('click', function() {
        document.querySelector('.tab-link:nth-child(3)').click();
    });

    document.querySelectorAll('.shipping-option input[type="radio"]').forEach(radio => {
        radio.addEventListener('change', function() {

            document.querySelectorAll('.shipping-option').forEach(option => {
                option.classList.remove('active');
            });

            this.closest('.shipping-option').classList.add('active');
        });
    });

    document.querySelectorAll('.payment-option input[type="radio"]').forEach(radio => {
        radio.addEventListener('change', function() {
            document.querySelectorAll('.payment-option').forEach(option => {
                option.classList.remove('active');
                option.style.borderColor = "#ccc"; // Default border color
            });
            this.closest('.payment-option').classList.add('active');
            this.closest('.payment-option').style.borderColor = "#ff4d4d"; // Active border color
        });
    });
    </script>
</body>

</html>