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
    <!-- Boxicons-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/style4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <title>Buttonscarves Beauty</title>
    <style>
        .bottom-section {
            display: none;
            position: absolute;
            background-color: white;
            width: 100%;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            margin-top: 10px; /* Adjust to position below the product card */
        }

        .product-card.large {
            margin-top: 20px; /* Adjust as needed to control spacing */
        }

        /* Ensure container-product maintains its layout */
        .container-product {
            position: relative;
            margin-bottom: 20px; /* Adjust to accommodate the space needed for bottom-section */
        }

        .product-card {
            cursor: pointer;
        }

        .dropdown-content .product-card {
            padding: 10px;
        }

        .dropdown-content .product-card:hover {
            background-color: #ddd;
        }

        .dropdown-content {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 10px;
            z-index: 1;
            display: none;
            position: absolute;
            width: auto; /* Allow dynamic width */
            max-width: 300px; /* Set a maximum width */
            border: 1px solid #ddd;
        }
        .dropdown-content img{
            width: 100px;
        }

        .dropdown-content.show {
            display: block;
        }

        .dropdown-content .product-details {
            margin-bottom: 10px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        /* Add hover effect to product cards */
        .product-card:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <header>
        <a href="index.php" class="logo"><img src="image/logo.png" alt="Logo"></a>

        <ul class="navmenu">
            <li><a href="#">COSMETICS</a>
                <ul class="submenu">
                    <li><a href="#">Lip</a></li>
                    <li><a href="#">Eye</a></li>
                    <li><a href="#">Face</a></li>
                </ul>
            </li>
            <li><a href="#">BEAUTY TOOLS</a></li>
            <li><a href="#">BODY CARE</a>
                <ul class="submenu">
                    <li><a href="#">Body Lotion</a></li>
                </ul>
            </li>
            <li><a href="#">PERFUMES</a></li>
            <li><a href="#">SPECIAL SETS</a></li>
        </ul>

        <div class="nav-icon">
            <a href="#"><i class='bx bx-heart'></i></a>
            <a href="#"><i class='bx bx-search'></i></a>
            <a href="#"><i class='bx bx-shopping-bag'></i></a>
            <a href="login.php"><i class='bx bx-user'></i></a>
        </div>
    </header>
    <section>
        <div class="promo-image">
            <img src="image/image2.jpg" alt="Product Image">
        </div>
    </section>
    <div class="container-product">
    <?php while ($row = $a->fetch_assoc()) {?>
        <div class="product-card" onclick="toggleDropdown(event, 'product1')">
            <img src="gambar/<?= $row['image'];?>" alt="Perfect Brow Set">
            <p><?= $row['name']; ?></p>
            <p>Rp <?= $row['price']; ?></p>
        </div>
    <?php }?>
    <?php $a->close(); ?>
    </div>

    <!-- Dropdown container -->
    <div id="dropdown-container">
        <div id="product1" class="dropdown-content">
            <div class="product-details">
                <img src="image/PerfectBrow.webp" alt="Perfect Brow Set">
                <p>PERFECT BROW SET</p>
                <p>Rp 255,600.00</p>
            </div>
        </div>

        <div id="product2" class="dropdown-content">
            <div class="product-details">
                <img src="image/DailyGlam.webp" alt="Daily Glam Essentials">
                <p>DAILY GLAM ESSENTIALS</p>
                <p>Rp 313,650.00</p>
            </div>
            <div class="product-details">
                <img src="image/DailyGlam.webp" alt="Daily Glam Essentials">
                <p>DAILY GLAM ESSENTIALS</p>
                <p>Rp 313,650.00</p>
            </div>
        </div>

        <div id="product3" class="dropdown-content">
            <div class="product-details">
                <img src="image/LipEssentials.webp" alt="Lip Essentials Set">
                <p>LIP ESSENTIALS SET</p>
                <p>Rp 334,800.00</p>
            </div>
        </div>

        <div id="product4" class="dropdown-content">
            <div class="product-details">
                <img src="image/RadiantCheeks.webp" alt="Radiant Cheeks & Lip Kit">
                <p>RADIANT CHEEKS & LIP KIT</p>
                <p>Rp 364,050.00</p>
            </div>
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
                    <i class='bx bxl-youtube'></i>
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
            <img src="image/alfamidi.png" alt="Alfamidi">
            <img src="image/dandan.png" alt="Dandan">
            <img src="image/shopeepay.png" alt="Shopee">
        </div>
        <div class="copyright">
            &copy; 2024 Buttonscarves. Part of <a href="https://modinitygroup.com">Modinity Group</a>.
        </div>
    </div>

    <script>
        function toggleDropdown(event, dropdownId) {
            const dropdown = document.getElementById(dropdownId);

            // Hide all other dropdowns
            document.querySelectorAll('.dropdown-content').forEach(content => {
                if (content.id !== dropdownId) {
                    content.classList.remove('show');
                    content.style.display = 'none';
                }
            });

            // Toggle visibility of the targeted dropdown
            if (dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
                dropdown.style.display = 'none';
            } else {
                dropdown.classList.add('show');
                dropdown.style.display = 'block';

                // Calculate and set the position of the dropdown
                const rect = event.currentTarget.getBoundingClientRect();
                dropdown.style.top = `${rect.bottom + window.scrollY}px`;
                dropdown.style.left = `${rect.left}px`;
                dropdown.style.width = `${rect.width}px`;
            }
        }

        // Hide dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.product-card')) {
                document.querySelectorAll('.dropdown-content').forEach(content => {
                    content.classList.remove('show');
                    content.style.display = 'none';
                });
            }
        });
    </script>
</body>
</html>