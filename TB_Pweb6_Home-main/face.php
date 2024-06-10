<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face Produk</title>

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
    .bs-face_1{
    font-size: 15px;
    color: rgb(81, 81, 81);
    font-family: Arial, sans-serif;
    letter-spacing: 2px;
    text-align: center;
    letter-spacing: 2px;
    height: 70px;
    transform: translateY(40px);
    }

    .bs-face_2{
    font-size: 11px;
    color: rgb(81, 81, 81);
    font-family: roboto, sans-serif;
    text-align: center;
    letter-spacing: 1px;
    transform: translateY(0px);
    }

    .bs-face_3{
    font-size: 9px;
    color: rgb(81, 81, 81);
    font-family: roboto, sans-serif;
    text-align: center;
    letter-spacing: 1px;
    transform: translateY(20px);
    }


</style>
</head> 
<body>
    <section>
    <div style="background-color: #c6c2c2; margin-top: 70px; padding: 0px; width: 1365px; height: 150px;">
        <div class="bs-face_1">BUTTONSCARVES BEAUTY FACE MAKEUP</div>
        <div class="bs-face_2">Discover Buttonscarves Beauty face makeup essentials to create a flawless-looking finish for every makeup look you need.</div>
        <div class="bs-face_3">13 Product</div>
    </div>

    <div class="product-face">
        <div class="produk-face">
            <img src="image/blush1.webp" alt="blush on">
            <p>Blush On</p>
        </div>
  
        <div class="produk-face">
            <img src="image/cush.webp" alt="cushion">
            <p>Cushion Foundation</p>
        </div>

        <div class="produk-face">
            <img src="image/wheat.webp" alt="powder">
            <p>Compact Powder</p>
        </div>
    </div>

    <div style="display: flex; justify-content:flex-end;">
            <div class="filter-2">
                <p>SORT BY:</p>
                <div class="filter-harga">
                    <div class="point-filter">
                        <label></label>
                        <select class ="option" name="">
                            <option class ="option" value=""></option>
                            <option class ="option" value="Featured"> Featured </option>
                            <option class ="option" value="Newest">Newest</option>
                            <option class ="option" value="Best Selling">Best Selling</option>
                            <option class ="option" value="Lowest $ - Highest $">Lowest $ - Highest $</option>
                            <option class ="option" value="Highest $$$ - Lowest $">Highest $$$ - Lowest $</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>


    <div style="display: flex;flex-direction:row;align-items:center;justify-content:flex-start;">
        <div class="filter-1">
            <p>FILTER BY:</p>
            <br>

            <div class="filter-container">
                <div class="point-filter">
                    <label>Type</label>
                    <select name="type">
                        <option class ="option" value=""></option>
                        <option class ="option" value="eyebrow">Eyebrow</option>
                        <option class ="option" value="eyelashes">Eyelashes</option>
                        <option class ="option" value="eyeliner">Eyeliner</option>
                        <option class ="option" value="mascara">Mascara</option>
                    </select>
                </div>
                
                <div class="point-filter">
                    <label>Category</label>
                    <select name="category">
                        <option class ="option" value=""></option>
                        <option class ="option" value="eyes">Eyes</option>
                    </select>
                </div>
                
                <div class="point-filter">
                    <label>Brand</label>
                    <select name="brand">
                        <option class ="option" value=""></option>
                        <option class ="option" value="buttonscarves-beauty">Buttonscarves Beauty</option>
                    </select>
                </div>
                
                <div class="point-filter">
                    <label>Shade</label>
                <select name="shade">
                    <option class ="option" value=""></option>
                    <option class ="option" value="ash-brown">Ash Brown</option>
                    <option class ="option" value="british">British</option>
                    <option class ="option" value="bronze">Bronze</option>
                    <option class ="option" value="chocolate">Chocolate</option>
                    <option class ="option" value="medina">Medina</option>
                    <option class ="option" value="newyork">New York</option>
                    <option class ="option" value="softbrown">Soft Brown</option>
                    <option class ="option" value="topkapi">Topkapi</option>
                </select>
                </div>
        
                <div class="point-filter">
                    <label>Price</label>
                    <select name="rinci-harga">
                        <option class ="option" value=""></option>
                        <option class ="option" value="20-30">Rp 20000 - Rp 30000</option>
                        <option class ="option" value="50-75">Rp 50000 - Rp 75000</option>
                        <option class ="option" value="100-200">Rp 100000 - Rp 200000</option>
                        <option class ="option" value="200-500">Rp 200000 - Rp 500000</option>  
                    </select>
                </div>
            </div>
        </div>

            <!-- Barang Barang -->
            <div class="products-new">
                <div class="product-new">
                    <a href="shopping.php">
                        <img class="try" src="image/Mascara-1.webp" alt="Eyemazing Mascara - Black">  
                        <p>Eyemazing Mascara - Black</p>
                        <p class="price">Rp 375,000.00</p>
                    </a>
                </div>

                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/blush1.webp" alt="Thunderblush Cheek">
                    <p>Thunderblush Cheek</p>
                    <p class="price"><!--<del>Rp 245,000.00</del>--> Rp 206,500.00</p> 
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/primer.webp" alt="Fine Blurring Mattifying Primer">
                    <p>Fine Blurring Mattifying Primer</p>
                    <p class="price">Rp 297,500.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/remover.webp" alt="All-In-Clean Remover">
                    <p>All-In-Clean Remover</p>
                    <p class="price">Rp 171,500.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/CoolingPrimer1.webp" alt="Miracle Cooling Filter Primer">
                    <p>Miracle Cooling Filter Primer</p>
                    <p class="price">Rp 346,500.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/powder.webp" alt="Youphoria Pressed Powder">
                    <p>Youphoria Pressed Powder</p>
                    <p class="price">Rp 297,500.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/sunkiss.webp" alt="Glow-Rious Magic Cushion">
                    <p>Glow-Rious Magic Cushion</p>
                    <p class="price">Rp 315,000.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/blushon.webp" alt="Everyday Divined Blush">
                    <p>Everyday Divined Blush</p>
                    <p class="price">Rp 227,500.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/stick.webp" alt="Everyday Bronzing Stick">
                    <p>Everyday Bronzing Stick</p>
                    <p class="price">Rp 137,500.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/refill.webp" alt="Refill Magic Touch Cover Cushion">
                    <p>Refill Magic Touch Cover Cushion</p>
                    <p class="price">Rp 88,500.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/cleansing.webp" alt="Bare With Me Cleansing Balm">
                    <p>Bare With Me Cleansing Balm</p>
                    <p class="price">Rp 87,000.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/cheek.webp" alt="Everyday Thunderblush Cheek">
                    <p>Everyday Thunderblush Cheek</p>
                    <p class="price">Rp 177,000.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/COVER.webp" alt="Magic Touch Cover Cushion">
                    <p>Magic Touch Cover Cushion</p>
                    <p class="price">Rp 262,500.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/compact.webp" alt="Everyday Perfect Blurring Compact Powder">
                    <p>Everyday Perfect Blurring Compact Powder</p>
                    <p class="price">Rp 255,000.00</p>
                </div>
    </section>

    <div class="footer-section">
        <div class="footer-column">
            <p class="teks">CUSTOMER INFORMATION</p> <br>
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
            <p class="teks">INFORMATION</p> <br>
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
            <p class="teks">SIGN UP AND SAVE</p> <br> 

            <p>Subscribe to get special offers, free giveaways, and once-in-a-lifetime deals.</p>

            <div class="subscribe-section">
                <input type="email" placeholder="Enter your email" />
                <button type="button">Subscribe</button>
            </div>
        
            <div class="social-icons">
                <p>FOLLOW US</p> <br>
                <a href="https://www.instagram.com/buttonscarves?igsh=bmMwYWo1bXpoejFr" target="_blank" aria-label="Instagram">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="https://www.tiktok.com/@buttonscarves?_t=8mpkRiCMH5t&_r=1" target="_blank" aria-label="TikTok">
                    <i class='bx bxl-tiktok'></i>
                </a>
                <a href="https://youtube.com/@buttonscarves5269?si=uD-S2zj9zCsLPMXG" target="_blank" aria-label="YouTube">
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
