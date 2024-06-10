<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/fitur.css">
    <title>Document</title>
</head>
<body>
<form action="form_cart_handler.php" method="POST" enctype="multipart/form-data">
      <input type="text" name="nama" required placeholder="nama" class="box"><br>
      <input type="file" name="image" required placeholder="image" class="box" accept='image/*'><br>
      <input type="text" name="image_type" required placeholder="image_type" class="box"><br>
      <input type="number" name="price" required placeholder="price" class="box"><br>
      <select name="shade" >
        <option value=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select><br>
      <input type="submit" name="submit">
   </form>
</body>
</html>