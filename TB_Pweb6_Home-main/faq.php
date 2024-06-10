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
        <div class="faq-title">
            <h1>FAQ</h1>
        </div>
        <div class="faq-content">
            <h4>DO I NEED AN ACCOUNT TO ORDER?</h4>
            <div class="Fsub-content">
                <p>You can order as a "Guest" but we will redirect you to register an account for faster checkout and payment. You can check your order status and you don't have to re-inputting the customer details every time you want to make a purchase.</p>

            </div>
        </div>
        <div class="faq-content">
            <h4>I'VE FORGOTTEN MY PASSWORD. WHAT SHOULD I DO?</h4>
            <div class="Fsub-content">
                <p>Click "Forgot Password?" link at the LOGIN Page and follow the instructions.</p>

            </div>
        </div>
        <div class="faq-content">
            <h4>I WOULD LIKE TO ORDER SOLD OUT ITEMS. IS IT POSSIBLE</h4>
            <div class="Fsub-content">
                <p>No, but we will let you know when it's restocked. Make sure you have registered as a member to keep updated</p>

            </div>
        </div>
        <div class="faq-content">
            <h4>CAN I INPUT DIFFERENT ADDRESSES ON MY PROFILE?</h4>
            <div class="Fsub-content">
                <p>Yes. Please add your new address under  : profile -> address -> add new address.</p>

            </div>
        </div>
        <div class="faq-content">
            <h4>DOES BUTTONSCARVES SHIP TO MULTIPLE ADDRESSES?</h4>
            <div class="Fsub-content">
                <p>Unfortunately We don’t. You have to create a different order to ship to different addresses.</p>

            </div>
        </div>
        <div class="faq-content">
            <h4>CAN I CHANGE MY SHIPPING ADDRESS AFTER MY ORDER HAS BEEN DISPATCHED/ SENT?</h4>
            <div class="Fsub-content">
                <p>Unfortunately, you can't. We only ship the order to the address written.</p>

            </div>
        </div>
        <div class="faq-content">
            <h4>CAN I ADD ITEMS AFTER I CHECK OUT?</h4>
            <div class="Fsub-content">
                <p>Unfortunately, you can't, because after checking out your order is recorded. If you want to add items, kindly make a new order without logging out.</p>

            </div>
        </div>
        <div class="faq-content">
            <h4>CAN I PAY BY CREDIT CARD?</h4>
            <div class="Fsub-content">
                <p>Yes, you can. You are able to pay in our website in IDR. Both are processed after clicking "Confirm Order" button.</p>

            </div>
        </div>
        <div class="faq-content">
            <h4>IS IT POSSIBLE TO JOIN AS RESELLER?</h4>
            <div class="Fsub-content">
                <p>Unfortunately no, currently we are not hiring any new resellers yet.</p>

            </div>
        </div>
        <div class="faq-content">
            <h4>IS IT POSSIBLE TO BE PARTNER FOR BUTTONSCARVES STORE?</h4>
            <div class="Fsub-content">
                <p>Yes, it is. If you are interested to be our partner, please kindly contact : info@buttonscarves.com with subject STORE PARTNER</p>

            </div>
        </div>
    </section>