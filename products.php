<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Palace - Product Page</title>
    <link rel="stylesheet" href="/css/style.css"> <!-- Link to external CSS file -->
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

    <div class="header">
        <h1>Shoe Palace</h1>
    </div>

    <?php
    // Example array of products (in a real scenario, this data could come from a database)
    $products = [
        [
            "image" => "images/run1.jpeg",
            "name" => "Stylish Running Shoe",
            "description" => "Comfortable and trendy running shoe for everyday use.",
            "price" => "ksh4999"
        ],
        [
            "image" => "images/street1.jpeg",
            "name" => "Street wear",
            "description" => "Dress in modern wear and in current trend.",
            "price" => "ksh6500"
        ],
        [
            "image" => "images/Sport2.jpeg",
            "name" => "Sport wear",
            "description" => "From football to basketball pick what satisfies you.",
            "price" => "ksh6999"
        ],
        [
            "image" => "images/off1.jpeg",
            "name" => "Official wear",
            "description" => "Stand out in meetings and official gatherings.",
            "price" => "ksh5999"
        ]
    ];

    // Loop through products and display them
    foreach ($products as $product) {
        echo '<div class="container">';
        echo '    <div class="product-image">';
        echo '        <img src="' . $product['image'] . '" alt="Shoe Image" style="width:100%">';
        echo '    </div>';
        echo '    <div class="product-details">';
        echo '        <h1>' . $product['name'] . '</h1>';
        echo '        <p>' . $product['description'] . '</p>';
        echo '        <div class="price">' . $product['price'] . '</div>';
        echo '        <a href="#" class="add-to-cart">Add to Cart</a>';
        echo '    </div>';
        echo '</div>';
    }
    ?>

</body>
</html>
