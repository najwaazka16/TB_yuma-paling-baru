
<?php 
session_start();
require_once "config.php";

$quey = "SELECT * FROM products";
$a = $conn->query($quey);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/fitur.css">
    <title>view products</title>

</head>
<body>
  <header>
        <a href="index.php" class="logo"><img src="image/logo.png" alt=""></a>
        <ul class="navmenu">
            <li><a href="fituradmin.php">ADD PRODUCTS</a><br><br></li>
            <li><a href="view_product.php">VIEW PRODUCTS</a></li>
        </ul>

        <div class="nav-icon">
            <a href="#"><i class='bx bx-heart' ></i></a>
            <a href="#"><i class='bx bx-search'></i></a>
            <a href="#"><i class='bx bx-shopping-bag' ></i></a>
            <a href="login.php"><i class='bx bx-user' ></i></a>
        </div>
    </header>  
    <div class="container-view">
        <section class="display-product">
            <table>
                <thead>
                    <th>no</th>
                    <th>name</th>
                    <th>image</th>
                    <th>image_type</th>
                    <th>price</th>
                    <th>shade</th>
                    <th>Action</th>
                </thead>
                <tbody>
                <?php $b = 1?>
                <?php while ($row = $a->fetch_assoc()) {?>
                    <tr>
                        <td><?= $b++;?></td>
                        <td><?= $row['name']; ?></td>
                        <td><img src="gambar/<?= $row['image']?>" alt=""></td>
                        <td><?= $row['image_type']; ?></td>
                        <td><?= $row['price']; ?></td>
                        <td><?= $row['shade']; ?></td>
                        <td>
                            <form action="hapushandler.php" method="GET">
                                <button type="submit" name="id" value="<?= $row['id']; ?>" class="delete_product_btn"><i class="bx bx-trash"></i></button>
                            </form>
                            <form action="editcart.php" method="GET">
                                <button type="submit" name="id" value="<?= $row['id']; ?>" class="update_product_btn"><i class="bx bx-edit"></i></button> 
                            </form>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>