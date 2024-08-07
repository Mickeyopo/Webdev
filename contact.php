<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Shoe Palace</title>
    <link rel="stylesheet" href="./css/style.css"> 
</head>
<body>

    <header class="navbar">
        <a href="index.php">Home</a>
        <a href="shop.php">Shop</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="delivery.php">Delivery</a>
        <a href="help.php">Help</a>
        <a href="products.php">Products</a>
    </header>
    <div class="topnav-right">
        <a href="signup.php">Sign Up</a>
        <a href="signin.php">Sign In</a>
    </div>

    <section class="hero">
        <h1>Contact Us</h1>
    </section>

    <section class="contact">
        <div class="container">
            <h2>Get in Touch</h2>
            <form action="submit_form.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="6" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

</body>
</html>
