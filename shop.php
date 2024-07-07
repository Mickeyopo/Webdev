<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Palace</title>
    <link rel="stylesheet" href="/css/style.css"> 
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

    <h1>Shoe Palace</h1>
    <p>Please fill the form when ready to place an order</p>
    <form method="post" action="order_form.php">
        Name <br>
        <input type="text" name="name">
        <br>
        Password <br>
        <input type="password" name="password">
        <br> <br>
        Email <br>
        <input type="email" name="email">
        <br>
        Date <br>
        <input type="date" name="date">
        <br>
        Time <br>
        <input type="time" name="time">
        <br> <br>
        Sex <br>
        Male <input type="radio" name="sex" value="Male"> <br>
        Female <input type="radio" name="sex" value="Female"> <br>
        Rather not say <input type="radio" name="sex" value="Rather not say"> 
        <br>
        Please enter area of residence <br>
        <input type="text" name="residence">
        <br>
        Choose your appropriate shoe size (UK-size) <br>
        <input type="range" name="shoe_size" max="15" min="3">
        <br>
        Enter your phone number <br>
        <input type="number" name="phone_number">
        <br>
        Click submit once you have confirmed your details <br>
        <input type="submit" value="Submit">
    </form>
    <br> <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = htmlspecialchars($_POST['name']);
        $password = htmlspecialchars($_POST['password']);
        $email = htmlspecialchars($_POST['email']);
        $date = htmlspecialchars($_POST['date']);
        $time = htmlspecialchars($_POST['time']);
        $sex = htmlspecialchars($_POST['sex']);
        $residence = htmlspecialchars($_POST['residence']);
        $shoe_size = htmlspecialchars($_POST['shoe_size']);
        $phone_number = htmlspecialchars($_POST['phone_number']);

     
        echo "<h2>Your Input:</h2>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Date: " . $date . "<br>";
        echo "Time: " . $time . "<br>";
        echo "Sex: " . $sex . "<br>";
        echo "Residence: " . $residence . "<br>";
        echo "Shoe Size: " . $shoe_size . "<br>";
        echo "Phone Number: " . $phone_number . "<br>";
    }
    ?>

</body>
</html>
