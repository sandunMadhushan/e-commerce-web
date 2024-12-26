<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './partials/header.php'; ?>
    <title>Contact Us</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
        color: #333;
    }

    header {
        background-color: #ff4d4d;
        padding: 1rem 2rem;
        text-align: center;
        color: white;
    }

    header h1 {
        margin: 0;
        font-size: 2rem;
    }

    main {
        max-width: 1200px;
        margin: 130px auto;
        padding: 2rem;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    h2 {
        font-size: 1.8rem;
        color: #333;
        margin-bottom: 1rem;
    }

    main p {
        line-height: 1.6;
        margin-bottom: 1.5rem;
        color: #555;
    }

    .contact-form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .contact-form input,
    .contact-form textarea {
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
        color: #555;
        width: 100%;
    }

    .contact-form input::placeholder,
    .contact-form textarea::placeholder {
        color: #bbb;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
        outline: none;
        border-color: #ff4d4d;
        box-shadow: 0 0 5px rgba(255, 77, 77, 0.5);
    }

    .contact-form textarea {
        grid-column: span 2;
        resize: none;
        height: 150px;
    }

    .submit-btn {
        grid-column: span 2;
        padding: 0.75rem 2rem;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        background-color: #ff4d4d;
        color: white;
        cursor: pointer;
        text-align: center;
    }

    .submit-btn:hover {
        background-color: #e63a3a;
    }

    .contact-info {
        margin-top: 2rem;
        padding: 2rem;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .contact-info p {
        margin: 0.5rem 0;
    }

    .contact-info h3 {
        margin-bottom: 1rem;
        font-size: 1.5rem;
        color: #333;
    }

    footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 1rem 0;
        margin-top: 2rem;
    }

    footer p {
        margin: 0;
        font-size: 0.9rem;
    }
    </style>
</head>

<body>
    <section>
        <?php include './partials/navbar.php'; ?>
        <?php include './partials/login-popup.php';?>
    </section>
    <main>
        <h2>We'd love to hear from you!</h2>
        <p>
            Whether you have a question about our products, need assistance, or just want to give us feedback, we're
            here to help. Fill out the form below, and we'll get back to you as soon as possible.
        </p>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
            <div class="contact-form">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="email" placeholder="Your Email">
                <input type="text" placeholder="Subject">
                <textarea placeholder="Your Message"></textarea>
                <button class="submit-btn">Send Message</button>
            </div>

            <div class="contact-info">
                <h3>Contact Information</h3>
                <p><strong>Address:</strong> 123 ABC Street, Metropolis, MT 2100</p>
                <p><strong>Email:</strong> support@shopease.com</p>
                <p><strong>Phone:</strong> +94 71 123 4567</p>
                <p><strong>Business Hours:</strong> Mon - Fri, 9:00 AM - 5:00 PM</p>
            </div>
        </div>
    </main>
    <section>
        <?php include './partials/footer.php'; ?>
    </section>
</body>

</html>