<?php
session_start();
 
include 'config.php';

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
    <link rel="stylesheet" href="./css/styles.css">
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
            <li><a href="testing.html">SPECIAL SETS</a></li>
        </ul>

        <div class="nav-icon">
            <a href="#"><i class='bx bx-heart' ></i></a>
            <a href="#"><i class='bx bx-search'></i></a>
            <a href="cart.php"><i class='bx bx-shopping-bag' ></i></a>
            <?php if(isset($_SESSION['user'])){?>
                <a href="account.php"><i class='bx bx-user' ></i></a>
            <?php }else{?>    
                <a href="login.php"><i class='bx bx-user' ></i></a>
            <?php }?>
        </div>
    </header>

    <?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<style>
    .slider {
      width: 100%;
      height: 510px;
      position: relative;
      margin-top: 100px;
    }

    .slider img {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
    }

    .slider img:first-child {
      z-index: 1;
      opacity: 1;
    }

    .slider img:nth-child(2) {
      z-index: 0;
    }

    .navigation-button {
      text-align: center;
      position: relative;
      margin: 0 auto;
    }

    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
    }

    .active,
    .dot:hover {
      background-color: #717171;
    }
  </style>
</head>
<body>
  <div class="slider">
    <img src="image/image1.jpg" alt="Slide 1">
    <img src="image/image2.jpg" alt="Slide 2">
    <img src="image/image3.jpg" alt="Slide 3">
  </div>

  <div class="navigation-button">
    <span class="dot active" onclick="changeSlide(0)"></span>
    <span class="dot" onclick="changeSlide(1)"></span>
    <span class="dot" onclick="changeSlide(2)"></span>
  </div>

  <script>
    var imgs = document.querySelectorAll('.slider img');
    var dots = document.querySelectorAll('.dot');
    var currentImg = 0; // index of the first image
    const interval = 3000; // duration(speed) of the slide

    function changeSlide(n) {
      for (var i = 0; i < imgs.length; i++) { // reset
        imgs[i].style.opacity = 0;
        dots[i].className = dots[i].className.replace(' active', '');
      }

      currentImg = n;

      imgs[currentImg].style.opacity = 1;
      dots[currentImg].className += ' active';
    }

    function autoSlide() {
      currentImg = (currentImg + 1) % imgs.length; // update the index number
      changeSlide(currentImg);
    }

    var timer = setInterval(autoSlide, interval);

    dots.forEach((dot, i) => {
      dot.onclick = () => {
        changeSlide(i);
      }
    });
  </script>
  <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        img{
            transform: scale(1.1); 
        }

    </style>
    <section class="new-arrival">
        <h2>NEW ARRIVAL</h2>
        <div class="products-new">
            <div class="product-new">
                <img src="image/Mascara.webp" alt="Eyemazing Mascara - Black">
                <p>Eyemazing Mascara - Black</p>
                <p class="price">Rp 375,000.00</p>
            </div>
            <div class="product-new">
                <span class="sale">Sale</span>
                <img src="image/wowbrow.webp" alt="Wow Brow Setting Treatment">
                <p>Wow Brow Setting Treatment</p>
                <p class="price"><s>Rp 245,000.00</s> Rp 171,500.00</p>
            </div>
            <div class="product-new">
                <span class="sale">Sale</span>
                <img src="image/cottoncloud.webp" alt="Cotton Cloud Sunscreen">
                <p>Cotton Cloud Sunscreen</p>
                <p class="price"><s>Rp 285,000.00</s> Rp 206,500.00</p>
            </div>
            <div class="product-new">
                <img src="image/Packagewithboxcopy.webp" alt="Buttonscarves Eau de Parfum Festive Edition">
                <p>Buttonscarves Eau de Parfum Festive Edition</p>
                <p class="price">Rp 2,495,000.00</p>
            </div>
        </div>
        <button class="view-all">Lihat semua</button>
    </section>
<section>
        <!--<div style="background-color: #dfd2c7; padding: 0px; margin: 0px;">-->
        <div> <img class="banner" src="image/bs cushion.jpg" alt="" width="1685" height="730"> </div>
        <div class="kanan">
            <p class="center-text">Achieve flawless, glowing skin with every application. With buildable coverage and a luminous finish, it's time to unlock your flawless glow with Glow-Rious Magic Cushion!</p>
        </div>
        </div>

        <div class="tombol-1">
            <a href="#" class="btn1" onclick="location.href='https://www.buttonscarves.com/products/bsb-glow-rious-magic-cushion'">Shop Now</a>
        </div>
   
        <div> <img class="banner2" src="image/bsb-banner-3.jpg" alt="" width="1602" height="600"> </div>
        <div class="kanan_1">
            <p class="center-text_1">Indulge in a velvety, intensely-pigmented formula that effortlessly adorns your lips in a stunning array of shades. Elevate your lip game with Cozy Lip Whipped Cream</p>
        </div>

        <div class="tombol-2">
            <a href="#" class="btn2" onclick="location.href='https://www.buttonscarves.com/products/bsb-cozy-lip-whipped-cream'">Shop Now</a>
        </div>


        <!--<div style="background_color: #f0f0f0; padding: 0px; margin: 10px;"></div>-->
        <div> <img class="model1" src="image/personlips.png" alt="" width="700" height="450"></div>
        <div style="background-color: #ffff; padding: 150px; margin: 0px; "> </div>
        
        <div class="kanan_2">
            <p>BUTTONSCARVES BEAUTY</p>
            <h1>VIRTUAL MAKEUP TRY ON</h1>
        </div>

        <div class="tombol-3">
            <a href="#" class="btn3" onclick="location.href='https://www.buttonscarves.com/products/bsb-cozy-lip-whipped-cream'">TRY NOW</a>
        </div>
    </section>
    
    <section class="shop-by-category">
        <p>SHOP BY CATEGORY</p>
        <div class="categories">
            <div class="category">
            <img src="image/cosmetics.webp" alt="">
            <p>COSMETICS</p>
        </div>
        <div class="category">
            <img src="image/beauty_tools.webp" alt="">
            <p>BEAUTY TOOLS</p>
        </div>
        <div class="category">
            <img src="image/perfumes.webp" alt="">
            <p>PERFUMES</p>
        </div>
        <div class="category">
            <img src="image/bodycare.webp"alt="">
            <p>BODY CARE</p>
        </div>
    </div>
 </Section>
 <div class="container">
    <a href="https://www.buttonscarves.com/pages/bsb-gifts" class="banner">
        <img src="image/background5.png" alt="Unlock Your Complimentary Gift" width="5000" height="500">
    </a>
    <div class="footer-section">
        <div class="footer-column">
            <p>CUSTOMER INFORMATION</p>
            <ul>
                <li><a href="howtobuy.php">How to Buy</a></li>
                <li><a href="payment_information.php">Payment Information</a></li>
                <li><a href="ship_information.php">Shipping Information</a></li>
                <li><a href="return.php">Returns & Exchanges</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="faq.php">FAQ</a></li>
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