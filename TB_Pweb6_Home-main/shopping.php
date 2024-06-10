<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/eye.css">
    <link rel="stylesheet" href="./css/cosmetic.css">
    <link rel="stylesheet" href="./css/face.css">
    <link rel="stylesheet" href="./css/shopping.css">


    <header>
        <a href="index.php" class="logo"><img src="image/logo.png" alt=""></a>
        
        <ul class="navmenu">
            <li><a href="cosmetic.php">COSMETICS</a><br><br>
                <ul class="submenu">
                    <li><a href="#">Lip</a></li>
                    <li><a href="eye.php">Eye</a></li>
                    <li><a href="face.php">Face</a></li>
                </ul>
            </li>
            <li><a href="#">BEAUTY TOOLS</a></li>
            <li><a href="#">BODY CARE</a><br><br>
            <ul class="submenu">
                <li><a href="#">Body Lotion</a></li>
            </ul>
            </li>
            <li><a href="#">PERFUMES</a></li>
            <li><a href="#">SPECIAL SETS</a></li>
        </ul>
        
        <div class="nav-icon">
            <a href="index.php"><i class='bx bx-heart' ></i></a>
            <a href="index.php"><i class='bx bx-search'></i></a>
            <a href="index.php"><i class='bx bx-shopping-bag' ></i></a>
            <a href="login.php"><i class='bx bx-user' ></i></a>
        </div>
    </header>

    <style>
        .star-rating {
            display: flex;
            direction: row;
            font-size: 2em;
            justify-content: center;
        }
        .star-rating input {
            display: none;
        }
        .star-rating label {
            color: gray;
            cursor: pointer;
        }
        .star-rating input:checked ~ label,
        .star-rating input:checked ~ label ~ label {
            color: gold;
        }
        .star-rating input:not(:checked) ~ label:hover,
        .star-rating input:not(:checked) ~ label:hover ~ label {
            color: gold;
        }
    </style>

</head>
<body>
    <section>
        <div class= "container">
            <div class= "item-shop">
                <img src="image/Mascara-1.webp" alt="">
                <img src="image/Mascara2.webp" alt="">
                <img src="image/Mascara3.webp" alt="">
                <img src="image/Mascara4.webp" alt="">
            </div>
            <div class="gambar-gede">
                <img src="image/Mascara-1.webp" alt="">
            </div>
            <div class="shop">
                <div class="bs-mascara_1">Eyemazing Mascara - Black</div><br>
                <div class="bs-mascara_2">Rp 375,000.00</div><br>
                <div class="bs-mascara_3">Tax included. Shipping calculated at checkout</div> <br>
                <div class="star-rating">
                    <input type="radio" id="star5" name="rating" value="5">
                    <label for="star5">★</label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4">★</label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3">★</label>
                    <input type="radio" id="star2" name="rating" value="3">
                    <label for="star2">★</label>
                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1">★</label>
                </div>
                <div class="bs-mascara_4">Variant: BLACK</div><br>
                <button class="black">Black</button> 
                <br>
                <button class="favorite">
                    <img src="image/heart.png" alt="" style="height:18px; width:18px">
                </button>
                
                <button class="cart">ADD TO CART</button> 


            </div>

        

        </div>
    </section>
    
</body>
</html>