<?php
   include('session.php');
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
    <title>Menu</title>
</head>
<body class="main-content bg-menu">
    <header id="navbar" class="padding-1">
        <div class="container">
            <div id="branding" class="branding">
                <img class="main-logo" src="img/Logo-04.png" alt="logo" width="50px">
                <h1 class="main-title">ExpressEat Menu</h1>
            </div>
            <nav class="navigation-menu">
                <ul>
                    <li><a href="main.php"><i style="font-size:15px" class="fa">&#xf015;</i>  Home</a></li>
                    <li class="current"><a href="main-menu.php"><i style="font-size:15px" class="fa">&#xf02d;</i>  Menu</a></li>
                    <li><a href="cart-mainpage.php"><i style="font-size:15px" class="fa">&#xf07a;</i></i>  Cart</a></li>
                    <li><a href="#"><i style='font-size:15px' class='fas'>&#xf406;</i> <?php echo $login_session; ?></a></li>
                    <li><a href = "logout.php">Sign Out</a></li>
                </ul>
           </nav>
        </div>
    </header>
    <div class="flex-1">
        <div class="title-list">
            <h4>menu</h4>
        </div>
        <div class="navigate">
            <a href="main.php"><i class='fas'>&#xf060;</i>Back To Home</a>
        </div>
        <div class="navigate-right" style="float: right; display: inline;">
            <a style="font-size:30px; font-weight: 500; color: rgb(133, 124, 124);" href="menu-list.php">Go To Menu List<i class='fas' style="font-size:40px; color: rgb(133, 124, 124); margin-right: 20px;">&#xf061;</i></a>
        </div>
    </div>
    <div class="category" style="padding: 30px 0 20px 90px; width: 90%;  float: left;">
        <h1 style="color: rgb(90, 85, 85);">Categories</h1>
    </div>
    <section class="menu-box width">
        <div class="card">
            <img src="img/Coffee/cappucino.jpg" alt="Drinks">
            <div class="container-card">
                <a href="menu-list.php#drink-section"><h1>Drinks</h1></a>
            </div>
        </div>
        <div class="card">
            <img src="img/cakes/blueberry cheese.jpg" alt="Cake & Pastry">
            <div class="container-card">
                <a href="menu-list.php#cakepastry-section"><h1>Cake & Pastry</h1></a>
            </div>
        </div>
        <div class="card">
            <img src="img/Waffle/wafflenutellaberry.jpg" alt="Waffle">
            <div class="container-card">
                <a href="menu-list.php#waffle-section"><h1>Waffle</h1></a>
            </div>
        </div>
        <div class="card">
            <img src="img/Pasta/aglio olio.jpg" alt="Pasta & Pizza">
            <div class="container-card">
                <a href="menu-list.php#pastapizza-section"><h1>Pasta & Pizza</h1></a>
            </div>
        </div>
        <div class="card">
            <img src="img/Salad/chicken salad.jpg" alt="Salad">
            <div class="container-card">
                <a href="menu-list.php#salad-section"><h1>Salad</h1></a>
            </div>
        </div>
        <div class="card">
            <img src="img/Sides/mac and chss.jpg" alt="Side Dish">
            <div class="container-card">
                <a href="menu-list.php#sidedish-section"><h1>Side Dish</h1></a>
            </div>
        </div>
    </section>
    <footer class="menu-footer">
        <h1>&copy; Copyright 2021 MeowCat Team</h1>
    </footer>
</body>
</html>