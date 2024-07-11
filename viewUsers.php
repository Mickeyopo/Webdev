<?php
session_start();
require_once"config/dbConnect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Sign Up</title>
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
       <?php
       if(isset($_SESSION["control"])){
        ?>
        <div class ="usertitle">
            Hello <?php print $_SESSION["control"] ["fullname"]; ?>
       </div>
       <a href="processes/user-process.php?signout" >Sign Out</a>
       <?php
       }
       ?>
    </div>
    </body>
</html>