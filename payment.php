<?php
   include('session.php');
   include "generatePaymentID.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Payment</title>
</head>
<body>
    <div class="main-content bg-menu">
        <header id="navbar" class="padding-1">
            <div class="container">
                <div id="branding" class="branding">
                    <img class="main-logo" src="img/Logo-04.png" alt="logo" width="50px">
                    <h1 class="main-title">ExpressEat Menu</h1>
                </div>
                <nav class="navigation-menu">
                    <ul>
                        <li><a href="#"><i style="font-size:15px" class="fa">&#xf015;</i>  Home</a></li>
                        <li><a href="main-menu.php"><i style="font-size:15px" class="fa">&#xf02d;</i>  Menu</a></li>
                        <li class="current"><a href="cart-mainpage.php"><i style="font-size:15px" class="fa">&#xf07a;</i></i>  Cart</a></li>
                        <li><a href="#"><i style='font-size:15px' class='fas'>&#xf406;</i> <?php echo $login_session; ?></a></li>
                        <li><a href = "logout.php">Sign Out</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="flex-1">
            <div class="title-list">
                <h4>Checkout Payment</h4>
            </div>
            <div class="navigate">
                <a href="cart-mainpage.php"><i class='fas'>&#xf060;</i>Back To Shopping Cart</a>
            </div>
            <div class="navigate-right">
                <a href="main.php">Go To Main Page<i class='fas'>&#xf061;</i></a>
            </div>
        </div>
        <div class="container-1">
            <form name="payment" action="payment-confirm.php" method="post">
                <h4>Order for</h4>
                <div class="row">
                     <div class="col-25">
                        <label for="PaymentID"><b>Payment ID</b></label>
                    </div>
                    <div class="col-75">
                        <input name="id" value="
                            <?php echo $paymentID; ?>
                            " type="text" readonly>
                        </input>
                    </div>
                    <div class="col-25">
                        <label for="Name"><b>Full Name</b></label>
                    </div>
                    <div class="col-75">
                        <input name="name" value="
                            <?php echo $firstname. ' '. $lastname; ?>
                            " type="text" readonly>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="address"><b>Address</b></label>
                    </div>
                    <div class="col-75">
                        <input name="address" value="
                            <?php echo $address. ' ,'. $postal. ' ,'. $city. ' ,'. $state. ' ,'. $country; ?>
                            " type="text" readonly>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="mobile"><b>Mobile</b></label>
                    </div>
                    <div class="col-75">
                        <input name="phone" value="
                            <?php echo '0'.$phone; ?>
                            " type="text" readonly>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="mobile"><b>Total Amount (RM)</b></label>
                    </div>
                    <div class="col-75">
                        <input id="total" name="total" value="
                        <?php include "totalpayment.php"; echo  $sum;?>
                        " type="text" readonly>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <h4>How would you like to pay</h4>
                        <div class="filter-container">
                            <input type="radio" id="cash-method" name="payment-method" checked value="cash">
                            <input type="radio" id="card-method" name="payment-method" value="card">
                            <input type="radio" id="online-banking-method" name="payment-method" value="online">
                            <input type="radio" id="grabpay-method" name="payment-method" value="grabpay">
                            <input type="radio" id="touchngo-method" name="payment-method" value="touchngo">
                            <input type="radio" id="boost-method" name="payment-method" value="boost">
                            <div class="box-1">
                                <label for="cash-method" class="cashbtn"><h3>Cash</h3></label>
                            </div>
                            <div class="box-2">
                                <label for="card-method" class="creditbtn"><h3>Credit Card/Debit Card</h3><img src="img/payment/creditdebit.jpg" alt="creditdebit" width="50px" height="20px"></label>
                            </div>
                            <div class="box-3">
                                <label for="online-banking-method" class="onlinebtn"><h3>Online Banking</h3><img src="img/payment/onlinebanking.jpg" alt="onlinebanking" width="50px" height="20px"></label>
                            </div>
                            <div class="box-4">
                                <label for="grabpay-method" class="grabpaybtn"><h3>E-Wallet Grab Pay</h3><img src="img/payment/grabpay.png" alt="grabpay" width="50px" height="20px"></label>
                            </div>
                            <div class="box-5">
                                <label for="touchngo-method" class="touchngobtn"><h3>E-Wallet Touch 'n Go</h3><img src="img/payment/touchngo.png" alt="touchngo" width="50px" height="20px"></label>
                            </div>
                            <div class="box-6">
                                <label for="boost-method" class="boostbtn"><h3>E-Wallet Boost</h3><img src="img/payment/boost.png" alt="boost" width="50px" height="20px"></label>
                            </div> 
                        </div>             
                    </div>
                </div>
                <div class="row">
                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" required> I agree to the Terms and Condition
                        and understand that my information will be used as described on this page and ExpressEat Privacy Policy. If I choose to 
                        pay with credit or debit card, my card information will be automatically stored and secured for future payments.
                    </label>
                    <button id="payment" type="submit" class="gotopaymentbtn">Confirm Payment</button>
                </div>
            </form>
        </div>
        <footer class="menu-footer">
            <h1>&copy; Copyright 2021 MeowCat Team</h1>
        </footer>
    </div>
    <script>
        document.getElementById("payment").addEventListener("click", Payment);
        function Payment(){
            alert("Successful payment! Please check your email for receipt");
        }
    </script> 
</body>
</html>