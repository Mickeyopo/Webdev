<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Sign In</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        
        // Placeholder for actual authentication
        if ($username == "testuser" && $password == "testpassword") {
            echo "Sign in successful!";
        } else {
            echo "Invalid username or password!";
        }
    }
    ?>

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

    <div class="header">
        <h1>Sign In header</h1>
    </div>
    <div class="row">
        <div class="content">
            <h1>Main content</h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi est quod possimus deleniti tempora dolore vero, error, eum officia ut sequi cumque asperiores, deserunt nihil? Totam iure doloribus iste eos.
        </div>
        <div class="sidebar">
            <h1>Sign In Form</h1>
            <form action="signin.php" method="POST" autocomplete="off">
                <div>
                    <input type="text" name="username" maxlength="50" placeholder="Please enter your username" required autofocus />
                </div>
                <div>
                    <input type="password" name="password" maxlength="100" placeholder="Please enter your password" required />
                </div>
                <div>
                    <input type="submit" name="signin" value="Sign In" />
                </div>
            </form>
        </div>
    </div>
</body>
</html>
