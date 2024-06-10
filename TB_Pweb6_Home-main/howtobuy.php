<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <title>Buttonscarves Beauty</title>
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
            <li><a href="#">SPECIAL SETS</a></li>
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
    <section>
        <div class="htb-title">
            <h1>HOW TO BUY</h1>
        </div>
        <a href="index.php" class="logo2"><img src="image/htb.png" alt=""></a>
        <div class="htb-content">
            <h4>What should I do if there's a problem with my order?</h4>
            <div class="hsub-content">
                <p>We are here for you! You may contact us via live chat, email us to order@buttonscarves.com or whatsapp us to: +6281210082052. </p>
            </div>
        </div>
        <div class="htb-content">
            <h4>What payment methods do you accept?</h4>
            <div class="hsub-content">
                <p>You can either pay by:</p>
                <div class="hsub-contentli">
                    <li>Credit & Debit Card (Visa & Mastercard)</li>
                    <div class="hsub-contentp">
                        <p>All our payment gateways capture payments in Indonesia Rupiah. If your card's currency is other than Indonesia Rupiah, you may be subject to a currency-conversion fee from your card issuer. We recommend consulting your credit card provider for information on any applicable fees.</p>
                    </div>
                    <li>Bank Transfer </li>
                </div>
                <p>Choose the payment method that suits you best and follow the payment steps. The instruction will also be sent to your email address in case you need it later. You have 24 hours to complete the payment, or your unique Virtual Account will be expired and your order will automatically be cancelled.</p>
                <p>If you prefer to do payment with BCA transfer, don't forget to confirm your payment here</p>
            </div>
        </div>
        <div class="htb-content">
            <h4>I received my order, but one of them is missing. What do I do?</h4>
            <div class="hsub-content">
                <p>We are terribly sorry about that! Please email us your order ID and the item you did not receive to order@buttonscarves.com</p>
            </div>
        </div>
        <div class="htb-contentt">
            <h4>IMPORTANT NOTE:</h4>
            <span>Please note that bank transfers is highly recommended to be done through ATM instead of internet banking due to specific cut off time of clearing system applied to internet banking.</span>
            </div>
        </div>

    </section>