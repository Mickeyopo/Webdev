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

    <section class="hero">
        <h1>WELCOME TO SHOE PALACE</h1>
    </section>

    <section class="products">
        <?php
       
        $products = [
            [
                "image" => "images/stay2.jpeg",
                "name" => "Stay at home",
                "price" => "ksh1500"
            ],
            [
                "image" => "images/sport1.jpeg",
                "name" => "Sport Shoes",
                "price" => "ksh6999"
            ],
            [
                "image" => "images/street2.jpeg",
                "name" => "Casual Shoes",
                "price" => "ksh6500"
            ],
            [
                "image" => "images/off2.jpeg",
                "name" => "Official shoes",
                "price" => "ksh5999"
            ]
        ];

       
        foreach ($products as $product) {
            echo '<div class="product">';
            echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
            echo '<h2>' . $product['name'] . '</h2>';
            echo '<p>Price: ' . $product['price'] . '</p>';
            echo '</div>';
        }
        ?>
    </section>
</body>
</html>
