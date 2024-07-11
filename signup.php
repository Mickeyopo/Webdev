<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Sign Up</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = htmlspecialchars($_POST['fullname']);
        $email = htmlspecialchars($_POST['email']);
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $confpass = htmlspecialchars($_POST['Confpass']);
        
        // Check if passwords match
        if ($password !== $confpass) {
            echo "Passwords do not match!";
        } else {
            // Proceed with further processing (e.g., save to database)
            echo "Sign up successful!";
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
        <a href="signup.php" >Sign Up</a>
        <a href="signin.php" >Sign In</a>
    </div>
    <div class="row">
        <div class="content">
            <h1>Sign up form</h1>
            <form action="signup.php" method="POST" autocomplete="off">
                <div>
                    <input type="text" name="fullname" maxlength="50" placeholder="Please enter your full name" required autofocus />
                </div>
                <div>
                    <input type="email" name="email" maxlength="50" placeholder="Please enter your email" required />
                </div>
                <div>
                    <input type="text" name="username" maxlength="50" placeholder="Please enter your username" required />
                </div>
                <div>
                    <input type="password" name="password" maxlength="100" placeholder="Please enter your password" required />
                </div>
                <div>
                    <input type="password" name="Confpass" maxlength="100" placeholder="Please confirm password" required />
                </div>
                <div>
                    <input type="submit" name="signup" value="Sign Up" />
                </div>
            </form>
        </div>
    </div>
    <div class="sidebar">
        <h1>Side bar</h1>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolor repellat numquam voluptas impedit at sit! Libero voluptas vero temporibus qui. Libero beatae atque quam, earum fugiat ex ducimus iure.
    </div>
</body>
</html>
