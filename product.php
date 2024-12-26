<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './partials/header.php' ?>
</head>

<body>
    <section>
        <?php include './partials/navbar.php'?>
        <?php include './partials/login-popup.php'?>
    </section>

    <main class="product-page">
        <section class="product-details">
            <div class="product-image">
                <img src="./images/backpack01.png" alt="Product Image">
            </div>
            <div class="product-info">
                <h1>Product Title</h1>
                <p class="rating">⭐⭐⭐⭐☆ <span>(4 reviews)</span></p>
                <p class="price">Rs 1500.00</p>
                <select>
                    <option>Select Model</option>
                    <option>Model 1</option>
                    <option>Model 2</option>
                </select>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat bibendum ex vel elementum.
                    Cras eget sapien accumsan.
                </p>
                <a class="add-to-cart">Add to cart</a>
            </div>
        </section>

        <section class="similar-products">
            <h2>Similar Products</h2>
            <div class="single-product-grid">
                <div class="single-product-card">Product 1</div>
                <div class="single-product-card">Product 2</div>
                <div class="single-product-card">Product 3</div>
                <div class="single-product-card">Product 4</div>
            </div>
        </section>

        <section class="reviews">
            <h2>Reviews</h2>
            <div class="review">
                <h4>John Doe</h4>
                <p>⭐⭐⭐⭐☆</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat bibendum ex vel elementum.</p>
            </div>
            <div class="review">
                <h4>John Doe</h4>
                <p>⭐⭐⭐⭐☆</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat bibendum ex vel elementum.</p>
            </div>
        </section>
    </main>

    <section>
        <?php include './partials/footer.php' ?>
    </section>
</body>

</html>