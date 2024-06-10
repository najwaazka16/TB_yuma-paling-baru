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
    <div class="SI-title">
            <h1>Shipping Information</h1>
        </div>
        <div class="SI-content">
            <p>Buttonscarves can ship nationwide and worldwide. Read the Domestic & International shipping policy below for more information!</p>

            <div class="SII-content">
            <h4>Domestic Deliveries</h4>
            <div class="SIsub-content">
                <p>We use JNE Express (<a href="https://www.jne.co.id/en/home" class="link">https://www.jne.co.id/en/home</a>), and SAP Express (<a href="https://www.sap-express.id" class="link">https://www.sap-express.id</a>) for shipping to all cities in Indonesia. We also use GrabExpress (<a href="https://express.grab.com/en" class="link">https://express.grab.com/en</a>) for safe and fast shipping within the Jakarta Area.</p>
            </div>
            <div class="SIsubb">
            <p><span class="pay">JNE Express</span> offers Regular, Fast Service, and Trucking. Below you can find the estimated delivery time and type of service from JNE Express</p>
                <p class="text">JNE Express Service Types</p>
                <ul>
                    <li>- REG (Regular)</li>
                    <li>- YES (Yakin Esok Sampai)</li>
                    <li>- JTR (JNE Trucking)</li>
                </ul>
                <p class="text">JNE Express Estimated Delivery Times</p>
                <ul>
                    <li>Jabodetabek & Bandung: 1-3 Working Days</li>
                    <li>Jawa, Bali, & NTT: 3-6 Working Days</li>
                    <li>Sumatra, Kalimantan, & Sulawesi: 3-7 Working Days</li>
                    <li>Papua: 3-12 Working Days</li>
                </ul>
                <p><span class="pay">SAP Express</span> offers Regular, Fast Service, Land & Sea Cargo. Below you can find the estimated delivery time and type of service from SAP Express.</p>
                <p class="text">SAP Express Service Types</p>
                <ul>
                    <li>- Regular</li>
                    <li>- One Day Service (ODS)</li>
                    <li>- Same Day Service (SDS)</li>
                    <li>- Land & Sea Cargo</li>
                </ul>
                <p class="text">SAP Express Estimated Delivery Times</p>
                <ul>
                    <li>Jabodetabek & Bandung: 1-3 Working Days</li>
                    <li>Jawa, Bali, & NTT: 3-6 Working Days</li>
                    <li>Sumatra, Kalimantan, & Sulawesi: 3-7 Working Days</li>
                    <li>Papua: 3-12 Working Days</li>
                </ul>
                <p><span class="pay">Grab Express</span> is a safe, fast, and convenient courier service with live GPS tracking that helps you to send items within Jakarta Area only. Below you can find the estimated delivery time and type of service from GrabExpress.</p>
                <p class="text">Grab Express Service Types</p>
                <ul>
                    <li><span class="pay">Instant Delivery: </span>Your on-demand solution for deliveries needed within 2 hours. Maximum weight 15kg.</li>
                    <li><span class="pay">Same Day Delivery: </span>A more affordable alternative for deliveries made within 6 hours. Maximum weight 15kg.</li>
                </ul>
                <p class="text">Grab Express Estimated Delivery Times</p>
                <ul>
                    <li><span class="pay">INSTANT DELIVERY [JAKARTA AREA ONLY]: </span>Every Monday to Saturday for purchases made before 3 PM</li>
                    <li><span class="pay">SAME DAY DELIVERY [JAKARTA AREA ONLY] </span>Every Monday to Saturday for purchases made before 12 PM</li>
                </ul>
            </div>
        </div>
        <div class="SII-content">
            <h4>International Deliveries</h4>
            <div class="SIsub-content">
                <p>We ship worldwide! We use <span>DHL-Express (<a href="https://www.dhl.com/" class="link">https://www.dhl.com/</a>)</span> for all overseas shipping. Below you can find the estimated delivery time.</p>
            </div>
            <div class="SIsubb">
                <p class="text">DHL Estimated Delivery Times</p>
                <ul>
                    <li>South East Asia: 1-3 Working Days</li>
                    <li>Japan, Korea, South Asia: 2-3 Working Days</li>
                    <li>USA, Canada: 2-3 Working Days</li>
                    <li>Europe: 2-4 Working Days</li>
                    <li>Middle East: 3-4 Working Days</li>
                    <li>Shipping may take a longer lead time for a remote postal code or rural area.</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="SI-dropdown">
            <div class="SI-dropin" style="border:none;outline:none">
                <button class="accordionn">
                <a href="#" class="boxx"><i class='bx bx-package'></i></a>
                   Order Processing Time 
                <a href="#"class="iconn"><i class="fa-solid fa-chevron-down"></i></a>
                </button>
                <div class="pannell">
                    <p>After your payment is confirmed, we will process your order in 1-3 working days to check your payment, perform quality control, and pack your order. Orders can only be delivered when the full amount of payment is received and confirmed. </p>
                    <p>Typically we will process the order on the same day after your payment is confirmed on weekdays. All confirmed orders <span class="pay">after 2 PM</span> will be processed on the following day. If your order is confirmed on Friday, your order will be processed the <span class="pay">next Monday.</span></p>
                    <p><span class="pay">Please note the processing time might take longer due to the high volume of orders.</span></p>
                    <p>We will process your order during our working days, from <span class="pay">Monday to Friday from 10 AM – 3 PM</span>. We ship every day from Monday to Saturday, <span class="pay">except Sunday and public holidays</span>. Note that our order process only checks the payment, prepares, and delivers the goods to the shipping company.</p>
                    <p>After that, the shipping company needs a certain amount of time to deliver it to you, which varies from 1-2 days for domestic and 3-8 days for international deliveries. In short, from confirmation time the order will arrive earliest in 3 days.</p>
                 </div>
             </div>
        </div>

        <div class="SI-dropin" style="border:none;outline:none">
                <button class="accordionn">
                <a href="#" class="boxx"><i class='bx bxs-truck'></i></a>
                    Rates
                <a href="#"class="iconn"><i class="fa-solid fa-chevron-down"></i></a>
                </button>
                <div class="pannell">
                    <ol>
                        <li>The shipping fee may vary based on your location and the weight of the items in your order. Free shipping applies for a minimum purchase of IDR 500.000 or above. Please note that the shipping fee calculation will be displayed during the checkout process.</li>
                        <li>Enjoy the convenience of <span class="pay">GrabExpress</span> with our <span class="pay">flat shipping rates</span>: IDR 35.000 for Same-Day Delivery and IDR 75.000 for Instant Delivery. No minimum purchase and no free shipping apply.</li>
                        <li><span class="pay">International shipping rates</span>: The shipping fee may vary <span class="pay">based on your location</span> and the <span class="pay">weight of the items</span> in your order. Please note that the shipping fee calculation will be displayed during the checkout process.</li>
                   </ol>
                 </div>
             </div>

             <div class="SI-dropdown">
            <div class="SI-dropin" style="border:none;outline:none">
                <button class="accordionn">
                <a href="#" class="boxx"><i class='bx bx-location-plus'></i></a>
                   Track Your Shipment 
                <a href="#"class="iconn"><i class="fa-solid fa-chevron-down"></i></a>
                </button>
                <div class="pannell">
                    <p><span class="payy">For domestic shipping</span>, you may track your shipment at <a href="https://www.jne.co.id/en/tracking/trace" class="link">https://www.jne.co.id/en/tracking/trace</a> or <a href=" https://www.sap-express.id/en/track-awb " class="link"> https://www.sap-express.id/en/track-awb</a> </p>
                    <p><span class="payy">For International shipping</span>, you may track your shipment at <a href=" https://www.dhl.com/id-en/home/tracking/tracking-global-forwarding.html" class="link"> https://www.dhl.com/id-en/home/tracking/tracking-global-forwarding.html</a></p>
                    <p>Tracking numbers are usually traceable once it is collected and processed by the courier. Do give it at least 24 hours for it to be processed on the courier's end. If your order was completed during weekend/ public holidays, it will be traceable on the next working day.</p>
                    <p>You will be sent a <span class="payy">confirmation email</span> once your order has been dispatched with your tracking number information. You will be directed to the tracking site by clicking your tracking number. Otherwise, you might also track your order on <span class="payy">Accounts > My Order</span>, you will be able to see your tracking number and be directed to the tracking site.</p>
                 </div>
             </div>
        </div>

        <div class="SI-dropin" style="border:none;outline:none">
                <button class="accordionn">
                <a href="#" class="boxx"><i class='bx bx-ruler'></i></a>
                Shipping Rules & Restrictions
                <a href="#"class="iconn"><i class="fa-solid fa-chevron-down"></i></a>
                </button>
                <div class="pannell">
                    <ol>
                        <li>Buttonscarves is not responsible for any risks of losing after the shipping company delivers to your address.</li>
                        <li>Customers are responsible if the shipping company can't deliver the goods on time due to an incomplete address, no recipient at the address, or the recipient rejects the goods.</li>
                        <li>If the goods are returned to us, customers are obligated to pay the shipping fee one more time if the mistakes are due to the customer's conditions.</li>
                        <li>If any shipping errors are coming from Buttonscarves, we guarantee that we will give free shipping to the customers.</li>
                        <li>We also are not responsible for any additional taxes and duties charged. If you decide to refuse the delivery, you are responsible for all fees charged by the shipping company - both for sending and returning the product to us.</li>
                        <li>If you have more than 1 ID numbers you have to pay each shipping fee for each order.</li>
                   </ol>
                 </div>
             </div>

             <div class="SI-dropdown">
            <div class="SI-dropin" style="border:none;outline:none">
                <button class="accordionn">
                <a href="#" class="boxx"><i class='bx bx-purchase-tag-alt'></i></a>
                Taxes and Import Changes 
                <a href="#"class="iconn"><i class="fa-solid fa-chevron-down"></i></a>
                </button>
                <div class="pannell">
                    <p>All taxes, duties, and customs fees are the responsibility of the recipient of the package. These charges vary widely from country to country hence, we cannot advise what the cost would be. Buttonscarves has no control over the fees imposed and we also cannot reimburse the amount in any capacity.</p>
                 </div>
             </div>
        </div>  
        <p class="textt">If there is any problem, you can Whatsapp us on <span class="payyy">+6281210082052</span></p>
        <script>
  var acc = document.getElementsByClassName("accordionn");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      this.parentElement.classList.toggle("active");

      var pannel = this.nextElementSibling;

      if (pannel.style.display === "block") {
        pannel.style.display = "none";
        this.querySelector('.fa-chevron-down').classList.remove('rotate');
      } else {
        pannel.style.display = "block";
        this.querySelector('.fa-chevron-down').classList.add('rotate');
      }
    });
  }
</script>
</body>
</html>