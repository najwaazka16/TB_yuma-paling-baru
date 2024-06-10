<?php
include('config.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/fitur/css">
    <title>fitur admin</title>
</head>
<body>
<header>
        <a href="index.php" class="logo"><img src="image/logo.png" alt=""></a>
        <ul class="navmenu">
            <li><a href="fituradm.php">ADD PRODUCTS</a><br><br></li>
            <li><a href="view_product.php">VIEW PRODUCTS</a></li>
        </ul>

        <div class="nav-icon">
            <a href="#"><i class='bx bx-heart' ></i></a>
            <a href="#"><i class='bx bx-search'></i></a>
            <a href="#"><i class='bx bx-shopping-bag' ></i><span><sup>0</sup></span></sup></span></a>
            <a href="login.php"><i class='bx bx-user' ></i></a>
        </div>
    </header>
    <div class="container-product">
        <section>
            <h3 class="heading">ADD PRODUCTS</h3>
            <?php include('form_cart.php')?>
    </div>
</body>
</html>