<!DOCTYPE html>
<html lang="en">
<head>
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
    <link

    <title>Cosmetic Product</title>

    <header>
        <a href="index.php" class="logo"><img src="image/logo.png" alt=""></a>

        <ul class="navmenu">
            <li><a href="cosmetic.php">COSMETICS</a><br><br>
                <ul class="submenu">
                    <li><a href="#">Lip</a></li>
                    <li><a href="eye.php">Eye</a></li>
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
            <a href="index.php"><i class='bx bx-heart' ></i></a>
            <a href="index.php"><i class='bx bx-search'></i></a>
            <a href="index.php"><i class='bx bx-shopping-bag' ></i></a>
            <a href="login.php"><i class='bx bx-user' ></i></a>
        </div>
    </header>

    <style>
        body {
            font-family: 'arial', 'sans-serif' ;
        }
        .bs-cosmetics_1{
            color: rgb(81, 81, 81);
            font-size: 15px;
            font-weight: normal;
            padding: 20px;
            text-align: right;
            letter-spacing: 2px;
            transform: translateX(-27%);
            margin-top: -250px;
        }

        .bs-cosmetics_2{
            color: rgb(81, 81, 81);
            font-size: 11px;
            font-weight: normal;
            padding: 0px 20px;
            letter-spacing: 2px;
            margin-top: 10px;
            text-align: left;
            position: absolute;
            margin-top: 5px;
            left: 60%;
            transform: translateX(-37%);
            
        }

        .bs-cosmetics_3{
            color: rgb(81, 81, 81);
            font-size: 9px;
            font-weight: normal;
            padding: 0px 20px;
            letter-spacing: 1px;
            margin-top: 60px;
            text-align: left;
            position: absolute;
            left: 648px;
            transform: translateX(-37%);
        }

    </style>
</head>
<body>
    <section>
        <div style="background-color: #c6c2c2; margin-top: 80px; padding: 0px; width: 1350px; height: 350px;">
            <div> <img class="makeup" src="image/web-banner-makeup.jpg" alt="" width="600" height="350"> </div>
            <div class="bs-cosmetics_1">BUTTONSCARVES BEAUTY COSMETICS</div>
            <div class="bs-cosmetics_2">Shop various kinds of our easy-to-choose, easy-to-use, and bestseller cosmetics products to complement your daily makeup</div>
            <div class="bs-cosmetics_3">25 Product</div>
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
                    <a href="shopping.php">Eyemazing Mascara - Black</a>
                        <img class="try" src="image/Mascara.webp" alt="Eyemazing Mascara - Black">  
                        <p>Eyemazing Mascara - Black</p>
                        <p class="price">Rp 375,000.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/wowbrow.webp" alt="Wow Brow Setting Treatment">
                    <p>Wow Brow Setting Treatment</p>
                     <p class="price"><!--<del>Rp 245,000.00</del>--> Rp 171,500.00</p> 
                </div>
                <div class="product-new">
                    <img src="image/cottoncloud.webp" alt="Cotton Cloud Sunscreen">
                    <p>Cotton Cloud Sunscreen</p>
                    <p class="price"><!--<del>Rp 285,000.00</del>--> Rp 206,500.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/Berlin_2.webp" alt="Triple Treats Lip Cream">
                    <p>Thunderblush Cheek</p>
                    <p class="price">Rp 227,500.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/rouge.webp" alt="Thunderblush Cheek">
                    <p>Thunderblush Cheek</p>
                    <p class="price">Rp 206,500.00</p>
                </div>
                <div class="product-new">
                    <img src="image/lipmatte.webp" alt="Hydrasilk Lip Tint">
                    <p>Hydrasilk Lip Tint</p>
                    <p class="price">Rp 275,000.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/primer.webp" alt="Fine Blurring Mattifying Primer">
                    <p>Fine Blurring Mattifying Primer</p>
                    <p class="price">Rp 297,500.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/eyeliner.webp" alt="Eyemazing Eyeliner - Black">
                    <p>Eyemazing Eyeliner - Black</p>
                    <p class="price">Rp 140,000.00</p>
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
                    <img src="image/ashbrown1.webp" alt="Lock Me Up Eyebrow Gel">
                    <p>Lock Me Up Eyebrow Gel</p>
                    <p class="price">Rp 171,500.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/lipCream2.webp" alt="Cozy Lip Whipped Cream">
                    <p>Cozy Lip Whipped Cream</p>
                    <p class="price">Rp 325,000.00</p>
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
                    <img src="image/belgium.webp" alt="Everyday Intense Lip Cream">
                    <p>Everyday Intense Lip Cream</p>
                    <p class="price">Rp 195,000.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/refill.webp" alt="Refill Magic Touch Cover Cushion">
                    <p>Refill Magic Touch Cover Cushion</p>
                    <p class="price">Rp 88,500.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/jamilalipstick.webp" alt="BS X Dsaks Lipstick">
                    <p>BS X Dsaks Lipstick</p>
                    <p class="price">Rp 147,500.00</p>
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
                    <img src="image/velvet.webp" alt="Everyday Velvet Rouge Lipstick">
                    <p>Everyday Velvet Rouge Lipstick</p>
                    <p class="price">Rp 177,000.00</p>
                </div>
                <div class="product-new">
                    <span class="sale">Sale</span>
                    <img src="image/compact.webp" alt="Everyday Perfect Blurring Compact Powder">
                    <p>Everyday Perfect Blurring Compact Powder</p>
                    <p class="price">Rp 255,000.00</p>
                </div>

            </div>
    </div>
    
<!-- 

      <script>
            // When the user scrolls the page, execute myFunction
            window.onscroll = function() {myFunction()};

            // Get the navbar
            var navbar = document.getElementById("filter-1");

            // Get the offset position of the navbar
            var sticky = navbar.offsetTop;

            // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
            function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
            } -->
      <!-- </script>   -->
        </section>

        <!-- <section class="product">
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
                <p class="price"><del>Rp 245,000.00</del> Rp 171,500.00</p>
            </div>
            <div class="product-new">
                <span class="sale">Sale</span>
                <img src="image/cottoncloud.webp" alt="Cotton Cloud Sunscreen">
                <p>Cotton Cloud Sunscreen</p>
                <p class="price"><del>Rp 285,000.00</del> Rp 206,500.00</p>
            </div>
            <div class="product-new">
                <img src="image/Packagewithboxcopy.webp" alt="Buttonscarves Eau de Parfum Festive Edition">
                <p>Buttonscarves Eau de Parfum Festive Edition</p>
                <p class="price">Rp 2,495,000.00</p>
            </div>
        </div>
        </section> -->
    </section>


    <div style="width: 80%;background-color:#ffffff">
            

    </div>
    </div> 
    
    <!-- Content Ending -->

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

    <script src="script.js"></script>
</body>
</html>

