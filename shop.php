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
    <section class="shop-header">
        <h1>
            Welcome to the shop
        </h1>
        <p>
            Here you can browse through our products and buy them.
        </p>
    </section>
    <main class="shop-page">
        <section class="categories">
            <div class="category">New Arrivals</div>
            <div class="category">Best Selling</div>
            <div class="category">Men's</div>
            <div class="category">Women's</div>
            <div class="category">Kids' & Baby</div>
        </section>

        <section class="promotions">
            <div class="promotion">
                <h3>Ongoing Sale, 50% OFF</h3>
                <a>Browse Products</a>
            </div>
            <div class="promotion">
                <h3>Best Selling Products</h3>
                <a>Explore</a>
            </div>
        </section>

        <section class="offers">
            <div class="offer">
                <h3>Other Offer</h3>
                <a>Browse Products</a>
            </div>
        </section>

        <section class="inspiration">
            <h2>Inspiration</h2>
            <div class="shop-product-grid">
                <a href="product.php" class="shop-product-card">Product 1</a>
                <div class="shop-product-card">Product 2</div>
                <div class="shop-product-card">Product 3</div>
                <div class="shop-product-card">Product 4</div>
            </div>
        </section>
        <hr>
        <section class="recommended">
            <h2>Recommended Products</h2>
            <div class="shop-product-grid">
                <div class="shop-product-card">Product 5</div>
                <div class="shop-product-card">Product 6</div>
                <div class="shop-product-card">Product 7</div>
                <div class="shop-product-card">Product 8</div>
            </div>
        </section>
    </main>
    <section>
        <?php include './partials/footer.php' ?>
    </section>
    <script src="script.js"></script>
</body>

</html>