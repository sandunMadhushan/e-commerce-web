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

    .shipping-options label {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        cursor: pointer;
    }

    .shipping-options input {
        margin-right: 0.5rem;
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
                <button onclick="openTab(event, 'shipping-details')">Next</button>
            </section>
        </div>

        <div id="shipping-details" class="tab-content">
            <section class="shipping-section">
                <h2>Shipping Details</h2>
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="First Name">
                        <input type="text" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Address">
                        <input type="text" placeholder="Address 2">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Country">
                        <input type="text" placeholder="City">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="ZIP/Postal Code">
                        <input type="text" placeholder="Phone Number">
                    </div>
                    <div class="shipping-options">
                        <label><input type="radio" name="shipping" checked> Free Shipping</label>
                        <label><input type="radio" name="shipping"> Next Day Delivery</label>
                    </div>
                </form>
                <button onclick="openTab(event, 'payment-options')">Next</button>
            </section>
        </div>

        <div id="payment-options" class="tab-content">
            <section class="payment-section">
                <h2>Payment Options</h2>
                <p>Payment form can go here (e.g., card details, PayPal, etc.)</p>
                <button>Submit Order</button>
            </section>
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
        event.currentTarget.classList.add('active');
    }
    </script>
</body>

</html>