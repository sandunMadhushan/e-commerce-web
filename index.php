<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './partials/header.php' ?>
</head>

<body>
    <section class="navbar">
        <?php include './partials/navbar.php' ?>
        <?php include './partials/login-popup.php' ?>
    </section>
    <section class="content">
        <section class="hero">
            <div class="hero-text">
                <h1>ShopEase</h1>
                <p>Your one-stop shop for all your needs</p>
                <a href="shop.php">Shop Now</a>
            </div>
        </section>
        <h2 style="margin-left: 50px;">Featured Products</h2>
        <section class="featured-products">
            <div class="product-card">
                <img src="images/backpack01.png" alt="Product 3">
                <h2>Product 3</h2>
                <p>LKR 5500.00</p>
                <div style="align-items: center; justify-content: center;">
                    <a class="add2cart" href="#">Add to Cart</a>
                    <i class="material-icons md-12" href="
                        #">favorite_border</i>
                </div>
            </div>
            <div class="product-card">
                <img src="images/backpack01.png" alt="Product 3">
                <h2>Product 3</h2>
                <p>LKR 5500.00</p>
                <div style="align-items: center; justify-content: center;">
                    <a class="add2cart" href="#">Add to Cart</a>
                    <i class="material-icons md-12" href="
                        #">favorite_border</i>
                </div>
            </div>
            <div class="product-card">
                <img src="images/backpack01.png" alt="Product 3">
                <h2>Product 3</h2>
                <p>LKR 5500.00</p>
                <div style="align-items: center; justify-content: center;">
                    <a class="add2cart" href="#">Add to Cart</a>
                    <i class="material-icons md-12" href="
                        #">favorite_border</i>
                </div>
            </div>
        </section>

        <script src="script.js"></script>
</body>

</html>