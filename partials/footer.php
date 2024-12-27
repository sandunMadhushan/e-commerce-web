<div class="footer">
    <div class="footer-column">
        <img src="./images/logo.png" alt="Logo" class="footer-logo">
        <p>&copy; <span id="current-year"></span> ShopEase. All rights reserved.</p>
    </div>
    <div class="footer-column">
        <h3>Quick Links</h3>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <div class="footer-column">
        <h3>Contact Us</h3>
        <p>123 ABC St.</p>
        <p>Matale, 21000</p>
        <a href="mailto:contact@shopease.com">Email: contact@shopease.com</a>
        <a href="tel:+94711234567">Phone: +94 71 123 4567</a>
    </div>
</div>
<button id="goToTop" onclick="scrollToTop()">↑</button>

<style>
.footer {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    background-color: #333;
    color: #fff;
}

.footer-column {
    flex: 1;
    padding: 10px;
}

.footer-logo {
    height: 100px;
    width: 100px;
}

.footer-column h3 {
    margin-bottom: 10px;
}

.footer-column ul {
    list-style: none;
    padding: 0;
}

.footer-column ul li {
    margin-bottom: 5px;
}

.footer-column ul li a {
    color: #fff;
    text-decoration: none;
}

.footer-column ul li a:hover {
    text-decoration: underline;
}

.footer-column a {
    color: #fff;
    text-decoration: none;
    display: block;
}
</style>

<script>
document.getElementById('current-year').textContent = new Date().getFullYear();
</script>