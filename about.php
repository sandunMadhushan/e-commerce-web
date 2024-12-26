<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './partials/header.php'; ?>
    <title>About</title>
    <style>
    main {
        max-width: 1200px;
        margin: 2rem auto;
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

    .team {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .team-member {
        text-align: center;
        padding: 1rem;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .team-member img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 1rem;
    }

    .team-member h3 {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }

    .team-member p {
        font-size: 0.9rem;
        margin: 0;
        color: #777;
    }
    </style>
</head>

<body>
    <section>
        <?php include './partials/navbar.php'; ?>
        <?php include './partials/login-popup.php'; ?>
    </section>
    <main style="margin-top: 130px;">
        <h2>Welcome to Our Store</h2>
        <p>
            At ShopEase, we strive to provide the best online shopping experience for all your needs.
            Our mission is to make shopping convenient, affordable, and enjoyable for everyone. With
            a wide range of products and exceptional customer service, we aim to be your go-to online
            store.
        </p>
        <p>
            Founded in 2023, our team is dedicated to bringing you quality products and a seamless
            shopping experience. From electronics to fashion, and everything in between, we ensure
            that you get only the best. We are committed to sustainability and ethical practices,
            working closely with suppliers who share our values.
        </p>

        <h2>Meet Our Team</h2>
        <div class="team">
            <div class="team-member">
                <img src="https://via.placeholder.com/100" alt="Team Member">
                <h3>Jane Doe</h3>
                <p>Founder & CEO</p>
            </div>
            <div class="team-member">
                <img src="https://via.placeholder.com/100" alt="Team Member">
                <h3>John Smith</h3>
                <p>Chief Operating Officer</p>
            </div>
            <div class="team-member">
                <img src="https://via.placeholder.com/100" alt="Team Member">
                <h3>Emily Davis</h3>
                <p>Head of Marketing</p>
            </div>
            <div class="team-member">
                <img src="https://via.placeholder.com/100" alt="Team Member">
                <h3>Michael Lee</h3>
                <p>Lead Developer</p>
            </div>
        </div>
    </main>

    <section>
        <?php include './partials/footer.php'; ?>
    </section>
</body>

</html>