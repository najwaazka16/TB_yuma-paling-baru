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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
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
        <div class="PI-title">
            <h1>Payment Information</h1>
        </div>
        <div class="PI-content">
        <ol >
            <li>Select a product or more and proceed to checkout</li>
            <li>Fill in your address and choose a shipping method</li>
            <li>Click ‘Continue to Payment’ and choose ‘Payment with Midtrans’</li>
            <li>When you’re all set, click ‘Complete Order’</li>
            <li>You will be directed to select a payment method</li>
            <li>While your order is being processed, please don’t close your browser</li>
            <li>Available payment methods: 
                <span class="payment-methods">Credit/Debit Card, ATM/Bank Transfer, GoPay, ShopeePay, Kredivo, Alfa Group</span>
            </li>
            <li>Choose your payment method and complete it based on your choice</li>
            <li>Each payment method has a different time limit. The maximum time limit for Bank Transfer, Alfamart, Kredivo, and Akulaku is 3 Hours. In certain periods, payment time limits might be changed to 30 minutes only</li>
            <li>For QR Payments such as Shopeepay or GoPay maximum time limit is 15 Minutes</li>
            <li>All payments will be confirmed automatically and will update the order status to paid. If there is any problem, you can contact us at <a href="mailto:order@buttonscarves.com">order@buttonscarves.com</a></li>
        </ol>
        </div>
        <div class="PI-dropdown">
            <div class="PI-dropin" style="border:none;outline:none">
                <button class="accordion">
                    Pay with Bank Transfer BCA
                <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="pannel">
                    <ol>
                        <li>Click on “Complete Order” at the bottom of the page.</li>
                        <li>You will be directed to choose the payment method on the next page</li>
                        <li>Select payment through <span class="pay">Bank Transfer and choose BCA</span></li>
                        <li>You will receive an email confirmation from Midtrans informing BCA Virtual Account Number and payment time limit</li>
                        <li>Payment can be made through <span class="pay">BCA ATM, Klik BCA, or BCA Internet Banking</span></li>
                        <li>Use your VA Number to complete the payment</li>
                        <li>Insert the payable amount of your payment and then confirm</li>
                        <li>Your payment is completed</li>
                   </ol>
                 </div>
             </div>

             <div class="PI-dropin" style="border:none;outline:none">
                <button class="accordion">
                    Pay with Bank Transfer Mandiri
                <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="pannel">
                    <ol>
                        <li>Click on “Complete Order” at the bottom of the page.</li>
                        <li>You will be directed to choose the payment method on the next page</li>
                        <li>Select payment through <span class="pay">Bank Transfer and choose Mandiri</span></li>
                        <li>You will receive an email confirmation from Midtrans informing Mandiri Virtual Account Number and payment time limit</li>
                        <li>Payment can be made through <span class="pay">Mandiri ATM or Mandiri Internet Banking</span></li>
                        <li>Use your VA Number to complete the payment</li>
                        <li>Insert the payable amount of your payment and then confirm</li>
                        <li>Your payment is completed</li>
                   </ol>
                 </div>
             </div>

             <div class="PI-dropin" style="border:none;outline:none">
                <button class="accordion">
                    Pay with Bank Transfer BNI
                <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="pannel">
                    <ol>
                        <li>Click on “Complete Order” at the bottom of the page.</li>
                        <li>You will be directed to choose the payment method on the next page</li>
                        <li>Select payment through <span class="pay">Bank Transfer and choose BNI</span></li>
                        <li>You will receive an email confirmation from Midtrans informing BNI Virtual Account Number and payment time limit</li>
                        <li>Payment can be made through <span class="pay">BNI ATM, Mobile Banking, or Internet Banking</span></li>
                        <li>Use your VA Number to complete the payment</li>
                        <li>Insert the payable amount of your payment and then confirm</li>
                        <li>Your payment is completed</li>
                   </ol>
                 </div>
             </div>

             <div class="PI-dropin" style="border:none;outline:none">
                <button class="accordion">
                    Pay with Bank Transfer BRI
                <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="pannel">
                    <ol>
                        <li>Click on “Complete Order” at the bottom of the page.</li>
                        <li>You will be directed to choose the payment method on the next page</li>
                        <li>Select payment through <span class="pay">Bank Transfer and choose BRI</span></li>
                        <li>You will receive an email confirmation from Midtrans informing BRI Virtual Account Number and payment time limit</li>
                        <li>Payment can be made through <span class="pay">BRI ATM, Mobile Banking, or Internet Banking</span></li>
                        <li>Use your VA Number to complete the payment</li>
                        <li>Insert the payable amount of your payment and then confirm</li>
                        <li>Your payment is completed</li>
                   </ol>
                 </div>
             </div>

             <div class="PI-dropin" style="border:none;outline:none">
                <button class="accordion">
                    Pay with Bank Transfer Permata or Other Bank
                <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="pannel">
                    <ol>
                        <li>Click on “Complete Order” at the bottom of the page.</li>
                        <li>You will be directed to choose the payment method on the next page</li>
                        <li>Select payment through <span class="pay">Bank Transfer and choose Permata</span></li>
                        <li>You will receive an email confirmation from Midtrans informing Permata Virtual Account Number and payment time limit</li>
                        <li>Payment can be made through <span class="pay">Permata ATM, Bersama ATM, or Other Bank ATM</span></li>
                        <li>Use your VA Number to complete the payment</li>
                        <li>Insert the payable amount of your payment and then confirm</li>
                        <li>Your payment is completed</li>
                   </ol>
                 </div>
             </div>

             <div class="PI-dropin" style="border:none;outline:none">
                <button class="accordion">
                    Pay with Credit Card/ Card Installment
                <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="pannel">
                    <p>The currently available installments are only for <span class="pay">BCA (Visa, Mastercard, JCB, and Amex)</span> and <span class="pay">Mandiri (Visa & Mastercard)</span> Credit Card with a minimum Transaction IDR 500.000</p>
                    <ol>
                        <li>Click on “Complete Order” at the bottom of the page.</li>
                        <li>You will be directed to choose the payment method on the next page</li>
                        <li>Select payment with a <span class="pay">Credit or debit card</span></li>
                        <li>Input your 16-digit card number, expiry date, and CVV code</li>
                        <li>Choose the period for your installment payment. The Installment is available in various selections: <span class="pay">Full Payment, 3 Months, 6 Months, and 12 Months</span></li>
                        <li>Click “Pay Now” to continue the payment process</li>
                        <li>You will be directed to the confirmation page, where you’d need to input the OTP which will be sent to your phone number</li>
                        <li>Input the OTP number</li>
                        <li>Your payment is complete. You will receive an email from Midtrans confirming your payment.</li>
                   </ol>
                 </div>
             </div>

             <div class="PI-dropin" style="border:none;outline:none">
                <button class="accordion">
                    Pay with Kredivo
                <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="pannel">
                    <ol>
                        <li>Click on “Complete Order” at the bottom of the page.</li>
                        <li>You will be redirected to the Payments via Midtrans page to choose the payment method</li>
                        <li>Select payment with <span class="pay">Kredivo </span>and click "Pay Now"</li>
                        <li>You will be directed to log in to Kredivo Account</li>
                        <li>Make sure you have already signed up for your Kredivo Account</li>
                        <li>Once you’re logged in to your Kredivo Account, you have to choose the tenor for your installment</li>
                        <li>Click “Continue” to process the payment</li>
                        <li>You will be sent an OTP Confirmation Code via Message or WhatsApp</li>
                        <li>Insert your OTP Code and click "<span class="pay">Pay</span>"</li>
                        <li>Your payment is completed. You will receive an email from Midtrans confirming your payment.</li>
                   </ol>
                   <p>If there is any problem or inquiries about Kredivo, you can visit Kredivo FAQs</p>
                 </div>
             </div>

             <div class="PI-dropin" style="border:none;outline:none">
                <button class="accordion">
                    Pay with GoPay/ Other E-Wallets
                <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="pannel">
                    <ol>
                        <li>Click on “Complete Order” at the bottom of the page.</li>
                        <li>You will be directed to choose the payment method on the next page</li>
                        <li>Select payment with <span class="pay">GoPay/ Other E-Wallets</span></li>
                        <li>Open your Gojek app or other e-wallet apps</li>
                        <li>Scan the QR code shown on your monitor</li>
                        <li>Check your payment details in the app and then tap <span class="pay">Pay</span></li>
                        <li>Enter your PIN</li>
                        <li>Your payment is completed</li>
                   </ol>
                 </div>
             </div>

             <div class="PI-dropin" style="border:none;outline:none">
                <button class="accordion">
                    Pay with ShopeePay/ Shopee PayLater/ Other E-Wallets
                <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="pannel">
                    <ol>
                        <li>Click on “Complete Order” at the bottom of the page.</li>
                        <li>You will be directed to choose the payment method on the next page</li>
                        <li>Select payment with <span class="pay">ShopeePay or Shopee PayLater</span></li>
                        <li>Open your Shopee app or other e-wallet apps</li>
                        <li>Scan the QR code shown on your monitor</li>
                        <li>Check your payment details in the app</li>
                        <li>Click <span class="pay">Pay</span> directly if you choose to pay with <span class="pay">ShopeePay</span></li>
                        <li>Otherwise, if you choose to pay with <span class="pay">Shopee PayLater</span>, click <span class="pay">SPayLater</span> then <span class="pay">Pay</span></li>
                        <li>Enter your PIN </li>
                        <li>Your payment is completed</li>
                   </ol>
                 </div>
             </div>

             <div class="PI-dropin" style="border:none;outline:none">
                <button class="accordion">
                    Pay with Alfa Group
                <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="pannel">
                    <ol>
                        <li>Click on “Complete Order” at the bottom of the page.</li>
                        <li>You will be directed to choose the payment method on the next page</li>
                        <li>Select payment with <span class="pay">AlfaGroup</span></li>
                        <li>After confirming your payment, you will get a unique <span class="pay">Payment Code</span> number</li>
                        <li>You will receive a confirmation email informing the payment instruction</li>
                        <li>Note down your <span class="pay">payment code</span> and the <span class="pay"> total amount of your payment</span></li>
                        <li>Go to the nearest <span class="pay">Alfamart, Alfamidi, or Dan+Dan</span> store and provide the cashier with the payment code number</li>
                        <li>The cashier will confirm your transaction by asking for the total amount of your transaction and merchant name</li>
                        <li>After being confirmed, you will receive an email confirming your payment is successful.</li>
                        <li>Please keep your payment receipt just in case you need help via support</li>
                   </ol>
                 </div>
             </div>
        </div>

        <script>
  var acc = document.getElementsByClassName("accordion");
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
    </section>

    </body>
</html>