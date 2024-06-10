<?php

include 'config.php';
// session_start();

// if(isset($_POST['submit'])){

//    $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

//    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

//    if(mysqli_num_rows($select) > 0){
//       $row = mysqli_fetch_assoc($select);
//       $_SESSION['user_id'] = $row['id'];
//       header('location:index.php');
//    }else{
//       $message[] = 'incorrect password or email!';
//    }

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Account-Buttonscarves Beauty</title>
</head>
<body>

    <header>
        <a href="index.php" class="logo"><img src="image/logo.png" alt=""></a>

        <ul class="navmenu">
            <li><a href="#">COSMETICS</a><br><br>
                <ul class="submenu">
                    <li><a href="#">Lip</a></li>
                    <li><a href="#">Eye</a></li>
                    <li><a href="#">Face</a></li>
                </ul>
            </li>
            <li><a href="#">BEAUTY TOOLS</a></li>
            <li><a href="#">BODY CARE</a><br><br>
                <ul class="submenu">
                    <li><a href="#">Body Lotion</a></li>
                </ul>
            </li>
            <li><a href="#">PERFUMES</a></li>
            <li><a href="spesialset.php">SPECIAL SETS</a></li>
        </ul>

        <div class="nav-icon">
            <a href="#"><i class='bx bx-heart' ></i></a>
            <a href="#"><i class='bx bx-search'></i></a>
            <a href="#"><i class='bx bx-shopping-bag' ></i></a>
            <a href="login.php"><i class='bx bx-user' ></i></a>
        </div>
    </header>

    <?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

    <div class="form-container">

   <form action="loginhandler.php" method="POST">
      <h1>Login </h1>
      <input type="email" name="email" required placeholder="Email" class="box">
      <input type="password" name="password" required placeholder="Password" class="box">
      <a href="forget-password.php">Forgot your password? </a>
      <input type="submit" name="submit" class="btn" value="Sign in">
   </form>
   <div class="create-account">
    <a href="register.php">Create account</a>
   </div>
    <div class="icon-login">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-google' ></i></a>
        <a href="#"><i class='bx bxl-twitter' ></i></a>
    </div>
</div>
<div class="footer-section">
        <div class="footer-column">
            <p>CUSTOMER INFORMATION</p>
            <ul>
                <li><a href="#">How to Buy</a></li>
                <li><a href="#">Payment Information</a></li>
                <li><a href="#">Shipping Information</a></li>
                <li><a href="#">Returns & Exchanges</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <p>INFORMATION</p>
            <ul>
                <li><a href="#">Our Story</a></li>
                <li><a href="#">BSLady Club</a></li>
                <li><a href="#">Press</a></li>
                <li><a href="#">Highlights & Product Launches</a></li>
                <li><a href="#">Lifestyle Blog</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <p>SIGN UP AND SAVE</p>
            <p>Subscribe to get special offers, free giveaways, and once-in-a-lifetime deals.</p>
            <div class="subscribe-section">
                <input type="email" placeholder="Enter your email" />
                <button type="button">Subscribe</button>
            </div>
            <div class="social-icons">
                <p>FOLLOW US</p>
                <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="https://www.tiktok.com" target="_blank" aria-label="TikTok">
                    <i class='bx bxl-tiktok'></i>
                </a>
                <a href="https://www.youtube.com" target="_blank" aria-label="YouTube">
                    <i class='bx bxl-youtube' ></i>
                </a>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="payment-icons">
            <img src="image/visa.png" alt="Visa">
            <img src="image/mastercard.png" alt="Mastercard">
            <img src="image/jcb.png" alt="JCB">
            <img src="image/american-express.png" alt="American Express">
            <img src="image/bca1.png" alt="BCA">
            <img src="image/permata1.jpg" alt="Permata">
            <img src="image/mandiri.png" alt="Mandiri">
            <img src="image/bni1.webp" alt="BNI">
            <img src="image/bri1.webp" alt="BRI">
            <img src="image/gopay.png" alt="Gopay">
            <img src="image/qris.png" alt="Qris">
            <img src="image/akulaku.png" alt="Akulaku">
            <img src="image/alfamart.png" alt="Alfamart">
            <img src="image/alfamidi.png" alt="alfamidi">
            <img src="image/dandan.png" alt="dandan">
            <img src="image/shopeepay.png" alt="Shopee">
        </div>
        <div class="copyright">
            &copy; 2024 Buttonscarves. Part of <a href="https://modinitygroup.com">Modinity Group</a>.
        </div>
    </div>
</body>
</html>