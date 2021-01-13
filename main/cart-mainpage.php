<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Shopping Cart</title>
</head>
<body>
    <header id="navbar" class="padding-1">
        <div class="container">
            <div id="branding" class="branding">
                <img class="main-logo" src="../img/Logo-04.png" alt="logo" width="50px">
                <h1 class="main-title">ExpressEat Menu</h1>
            </div>
            <nav class="navigation-menu">
                <ul>
                    <li><a href="#"><i style="font-size:15px" class="fa">&#xf015;</i>  Home</a></li>
                    <li><a href="main-menu.php"><i style="font-size:15px" class="fa">&#xf02d;</i>  Menu</a></li>
                    <li class="current"><a href="cart-mainpage.php"><i style="font-size:15px" class="fa">&#xf07a;</i></i>  Cart</a></li>
                    <li><a href="#"><i style='font-size:15px' class='fas'>&#xf406;</i> Login</a></li>
                </ul>
           </nav>
        </div>
    </header>
    <div class="flex-1">
        <div class="title-list">
            <h4>Shopping Cart</h4>
        </div>
        <div class="navigate">
            <a href="main-menu.php"><i class='fas'>&#xf060;</i>Back To Menu</a>
        </div>
        <div class="navigate-right">
            <a href="payment.php">Proceed To Payment<i class='fas'>&#xf061;</i></a>
        </div>
    </div>
    <div class="cart-content">
        <section class="table-2">
            <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                <tr>
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Price per Unit</th>
                </tr>
                </thead>
            </table>
            </div>
            <div class="tbl-content">
            <?php  ?>
            </div>
        </section>
    </div>
    <footer class="menu-footer">
        <h1>&copy; Copyright 2021 MeowCat Team</h1>
    </footer>
</body>
</html>