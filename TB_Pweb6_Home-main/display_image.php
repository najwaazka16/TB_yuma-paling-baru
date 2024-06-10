<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT image, image_type FROM products WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($image, $imageType);
$stmt->fetch();
$stmt->close();

header("Content-Type: $imageType");
echo $image;

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "database";

    // Buat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT id, name, shade, price FROM products");

    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>{$row['name']} (Shade: {$row['shade']})</h2>";
        echo "<p>Price: Rp {$row['price']}</p>";
        echo "<img src='display_image.php?id={$row['id']}' width='100'>";
        echo "</div>";
    }

    $conn->close();
    ?>
</body>
</html>
