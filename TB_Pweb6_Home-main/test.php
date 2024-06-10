<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSB Special Sets - Buttonscarves</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        .intro {
            text-align: center;
            padding: 20px 0;
        }

        .intro h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .intro p {
            font-size: 1.2em;
            color: #666;
        }

        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .product-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .product-item {
            flex: 1 1 30%;
            box-sizing: border-box;
            padding: 10px;
            margin: 10px;
            text-align: center;
            border: 1px solid #ddd;
            box-shadow: 2px 2px 12px #aaa;
        }

        .product-item img {
            max-width: 100%;
            height: auto;
        }

        .product-item h3 {
            font-size: 1.5em;
            margin: 10px 0;
        }

        .product-item p {
            font-size: 1.2em;
            color: #333;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        /* Box CSS */
        #box {
            width: 200px;
            height: 200px;
            background-color: #f0f0f0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            z-index: 9999;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #box.show {
            display: block;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>BSB Special Sets</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <section class="intro">
                <h2>Special Sets for a Special You</h2>
                <p>Discover our exclusive collections crafted for elegance and style.</p>
            </section>

            <section class="products">
                <div class="product-grid">
                    <?php
                    // Sample product data array
                    $products = [
                        ["name" => "Set A", "price" => "$50", "image" => "path/to/imageA.jpg"],
                        ["name" => "Set B", "price" => "$60", "image" => "path/to/imageB.jpg"],
                        ["name" => "Set C", "price" => "$70", "image" => "path/to/imageC.jpg"]
                    ];

                    // Loop through products and display them
                    foreach ($products as $product) {
                        echo '
                        <div class="product-item">
                            <img src="' . $product["image"] . '" alt="' . $product["name"] . '">
                            <h3>' . $product["name"] . '</h3>
                            <p>' . $product["price"] . '</p>
                        </div>';
                    }
                    ?>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Buttonscarves. All rights reserved.</p>
        </div>
    </footer>

    <div id="box">
        This is a box.
    </div>

    <script>
        // JavaScript code to toggle a box when the menu is clicked
        document.addEventListener("DOMContentLoaded", function() {
            const menuButton = document.querySelector("#menu-button");
            const box = document.querySelector("#box");

            menuButton.addEventListener("click", function() {
                box.classList.toggle("show");
            });
        });
    </script>
</body>
</html>
