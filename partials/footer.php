<div class="footer">
    <div class="footer-column">
        <img src="./images/logo.png" alt="Logo" class="footer-logo">
    </div>
    <div class="footer-column">
        <h3>Quick Links</h3>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <div class="footer-column">
        <h3>Contact Us</h3>
        <p>123 E-commerce St.</p>
        <p>City, State, 12345</p>
        <p>Email: info@example.com</p>
        <p>Phone: (123) 456-7890</p>
    </div>
</div>

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
</style>