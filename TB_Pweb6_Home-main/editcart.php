<?php 
require_once "config.php";

$id = $_GET['id'];

$quey = "SELECT * FROM products WHERE id=$id";
$a = $conn->query($quey);

$rr = $a->fetch_assoc()

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/fitur.css">
    <title>Document</title>
</head>
<body>
<form action="editcart_handler.php" method="POST" enctype="multipart/form-data">
      <input style="display:none;" value="<?= $rr['id']; ?>" type="text" name="id" required placeholder="nama" class="box"><br>
      <input style="display:none;" value="<?= $rr['image']; ?>" type="text" name="image" required placeholder="nama" class="box"><br>
      <!-- pembatas -->
      <input value="<?= $rr['name']; ?>" type="text" name="nama" required placeholder="nama" class="box"><br>


      <img src="gambar/<?= $rr['image']; ?>" alt="">
      <input  type="file" name="image" placeholder="image" class="box" accept='image/*'><br>



      <input value="<?= $rr['image_type']; ?>" type="text" name="image_type" required placeholder="image_type" class="box"><br>
      <input value="<?= $rr['price']; ?>" type="number" name="price" required placeholder="price" class="box"><br>
      <select name="shade" >
        <option value="<?= $rr['shade']; ?>"><?= $rr['shade']; ?></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select><br>
      <input type="submit" name="edit">
   </form>
</body>
</html>