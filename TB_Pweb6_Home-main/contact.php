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

    <section>
    <div class="contact-title">
            <h1>CONTACT US</h1>
        </div>

        <div class="form-container2">
        <form action="" method="POST">
            <div class="row">
                <input type="text" name="fname" required placeholder="Name" class="box2 half-width">
                <input type="email" name="email" required placeholder="Email *" class="box2 half-width">
            </div>
            <input type="text" name="notlp" required placeholder="Phone Number" class="box2 full-width">
            <textarea name="comment" required placeholder="Comment" class="box2 full-width comment-box"></textarea>
            <input type="submit" name="submit" class="btn2" value="Send">
        </form>
    </div>

    <div class="contact-p">
            <p>PT. Alia Kreasi Mandiri Internasional</p>
            <p>Jl. Margasatwa No. 61, Cilandak, Jakarta Selatan 12450</p>
            <p>+62 812 1008 2052</p>
            <p>info@buttonscarves.com</p>
        </div>


    </section>
    
</body>
</html>