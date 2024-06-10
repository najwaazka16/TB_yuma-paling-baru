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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $shade = $_POST['shade'];
    $price = $_POST['price'];
    $image = $_FILES['image'];

    // Baca file gambar ke dalam variabel
    $imageData = file_get_contents($image['tmp_name']);
    $imageType = $image['type'];

    if (substr($imageType, 0, 5) == "image") {
        $stmt = $conn->prepare("INSERT INTO products (name, shade, price, image, image_type) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdss", $name, $shade, $price, $imageData, $imageType);

        if ($stmt->execute()) {
            echo "The file has been uploaded.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Only image files are allowed.";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <h1>Upload Image</h1>
    <form action="upload_blob.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <input type="text" name="name" placeholder="Product Name" required>
        <input type="text" name="shade" placeholder="Shade" required>
        <input type="number" name="price" placeholder="Price" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
