<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Transaction</title>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <img class="main-logo" src="../img/Logo-04.png" alt="logo" width="50px">
                <h1 class="main-title">ExpressEat Dashboard</h1>
            </div>
            <div class="navigation-bar">
                <nav>
                    <ul>
                        <li><a href="dashboard.php">Home</a></li>
                        <li><a href="userAccount.php">User Account</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li class="current"><a href="transaction.php">Transaction</a></li>
                    </ul>
               </nav>
               <div class="dropdown">
                <div class="container-hamburger-icon">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div> 
                <div class="dropdown-content">
                    <a href="#"><i class="fa fa-sign-in" style="font-size:15px; width: 20px;"></i> Login</a>
                    <a href="#"><i class="fa fa-bell" style="font-size:15px; width: 20px;"></i> Notification</a>
                    <!-- <a href="#"><i class="fa fa-shopping-cart" style="font-size:15px; width: 20px;"></i> Cart</a> -->
                </div>
            </div>
        </div>
    </header>
</body>
</html>