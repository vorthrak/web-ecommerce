<?php
// Koneksi ke database untuk pemesanan
$host = '(localhost)';
$dbname = '(nama db)';
$username = '(username)';
$password = '(password)';
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Menangani pemesanan produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['order_product'])) {
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $quantity = $_POST['quantity'];
    $customerName = $_POST['customer_name'];
    $address = $_POST['address'];

    // Menyimpan data pemesanan ke database
    $query = "INSERT INTO orders (product_name, product_price, quantity, customer_name, address) 
              VALUES (?, ?, ?, ?, ?)";
    $statement = $conn->prepare($query);
    $statement->execute([$productName, $productPrice, $quantity, $customerName, $address]);

    // Konfirmasi pemesanan
    echo "<p>Thank you, $customerName! Your order for $quantity x $productName has been placed successfully.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Ecommerce</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header>
    <h1>Welcome to Vorthrak Store</h1>
</header>

<div class="container">
    <div class="product-list">
        <div class="product">
            <img src="assets/images/iphone16.jpg" alt="iPhone 16 Pro Max">
            <h2>iPhone 16 Pro Max</h2>
            <p>Price: $1299</p>
            <form action="index.php" method="POST">
                <input type="hidden" name="product_name" value="iPhone 16 Pro Max">
                <input type="hidden" name="product_price" value="1299">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" min="1" value="1">
                <label for="customer_name">Name:</label>
                <input type="text" name="customer_name" required>
                <label for="address">Address:</label>
                <textarea name="address" required></textarea>
                <button type="submit" name="order_product">Order Now</button>
            </form>
        </div>

        <div class="product">
            <img src="assets/images/vivo-x200.jpg" alt="Vivo X200 Pro">
            <h2>Vivo X200 Pro</h2>
            <p>Price: $899</p>
            <form action="index.php" method="POST">
                <input type="hidden" name="product_name" value="Vivo X200 Pro">
                <input type="hidden" name="product_price" value="899">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" min="1" value="1">
                <label for="customer_name">Name:</label>
                <input type="text" name="customer_name" required>
                <label for="address">Address:</label>
                <textarea name="address" required></textarea>
                <button type="submit" name="order_product">Order Now</button>
            </form>
        </div>

        <div class="product">
            <img src="assets/images/xiaomi13t.jpg" alt="Xiaomi 13T">
            <h2>Xiaomi 13T</h2>
            <p>Price: $799</p>
            <form action="index.php" method="POST">
                <input type="hidden" name="product_name" value="Xiaomi 13T">
                <input type="hidden" name="product_price" value="799">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" min="1" value="1">
                <label for="customer_name">Name:</label>
                <input type="text" name="customer_name" required>
                <label for="address">Address:</label>
                <textarea name="address" required></textarea>
                <button type="submit" name="order_product">Order Now</button>
            </form>
        </div>
    </div>
</div>

<script src="assets/script.js"></script>
</body>
</html>
