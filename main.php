<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/logo.ico" />
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ultra&display=swap" rel="stylesheet">  
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>ExpressEat Main Page</title>
    <style>
        @media (max-width: 1350px) {
            .menu-all{
                flex-direction: column;
            }
            .column-1{
                width: auto;
                margin: 10px;
                border-right: none;
            }

            .column-2{
                width: auto;
                margin: 10px;
                border-left: none;
            }

            .main-content{
                width: auto;
                position: relative;
            }
        }
    </style>
</head>
<body class="main-content">
    <header id="navbar" class="padding-1">
        <div class="container">
            <div id="branding" class="branding">
                <img class="main-logo" src="img/Logo-04.png" alt="logo" width="50px">
                <h1 class="main-title">ExpressEat Menu</h1>
            </div>
            <nav class="navigation-menu">
                <ul>
                    <li class="current"><a href="main.php"><i style="font-size:15px" class="fa">&#xf015;</i>  Home</a></li>
                    <li><a href="main-menu.php"><i style="font-size:15px" class="fa">&#xf02d;</i>  Menu</a></li>
                    <li><a href="cart-mainpage.php"><i style="font-size:15px" class="fa">&#xf07a;</i></i>  Cart</a></li>
                    <li><a href="#"><i style='font-size:15px' class='fas'>&#xf406;</i> <?php echo $login_session; ?></a></li>
                    <li><a href = "logout.php">Sign Out</a></li>
                </ul>
           </nav>
        </div>
    </header>
    <div class="main-flex">
        <div class="flex" id="flexbox">
            <a href="#Main-Page">Main Page</a>
            <a href="#About-Us">About Us</a>
            <a href="#Menu">Menu</a>
            <a href="#Contact-Us">Contact Us</a>
        </div>
    </div>
    <div class="main-box">
        <div id="Main-Page">
            <div class="tajuk">
                <h4>Welcome!</h4>
            </div>
            <div class="des-main">
                <div class="des1">
                    <h1>COFFEE</h1>
                </div>
                <div class="des2">
                    <h2>LOVER</h>
                </div>
                <div class="des3">
                    <p>We Send Love Expressively Through Eating</p>
                </div>
            </div>
        </div>
        
            <div id="About-Us">
                <div class="tajuk-about">
                    <h4>About Us</h4>
                </div>
                <div class="row-abt">
                    <div class="col-abt">
                        <div class="about1">
                            <p>We are here expressively <br>
                                to bring bunch of joys to you and your belly. <br> As a fellow foodie, we want to share the comfort <br> of good food because ExpressEat will keep it warm, <br> keep it appetizing no matter where you are!</p>
                                <br>
                            <p><b><em>~ExpressEat Cafe</em></b></p>
                        </div>
                    </div>
                    <div class="col-abt">
                        <div class="about2">
                            <img src="img/dlm about us.png" alt="Milk Tea">
                        </div>
                    </div>
                </div>
            </div>
        
        <div class="menu-kot">
            <div id="Menu">
                <div class="tajuk-menu">
                    <h4>Menu</h4>
                </div>
                <div class="row-abt">
                    <div class="caption-menu">
                        <p class="des3">Keep browsing and it will get your mouth watering, just a few clicks and we will deliver it to you!</p>
                    </div>
                </div>
                <div class="kotak-menu">
                    <div class="row-abt">
                        <div class="col-men">
                            <div class="col-abt">
                                <img src="img/Coffee/expresso.jpg" alt="" style="width: 200px; height: 200px; padding: 10px; border-radius: 50px;">
                            </div>
                            <div class="col-abt">
                                <p style="font-size: 20px; font-weight: bold; color: rgb(238, 158, 83); border-left: 20px solid rgb(105, 208, 240); width: fit-content; margin-left: 40%;
                                margin-bottom: 3%;">Expresso</p>
                            </div>
                        </div>
                        <div class="col-men">
                            <div class="col-abt">
                                <img src="img/cakes/tiramisu.jpg" alt="" style="width: 200px; height: 200px; padding: 10px; border-radius: 50px;">
                            </div>
                            <div class="col-abt">
                                <p style="font-size: 20px; font-weight: bold; color: rgb(238, 158, 83); border-left: 20px solid rgb(238, 240, 105); width: fit-content; margin-left: 40%;">Tiramisu</p>
                            </div>
                        </div>
                        <div class="col-men">
                            <div class="col-abt">
                                <img src="img/pastries/cannoli.jfif" alt="" style="width: 200px; height: 200px; padding: 10px; border-radius: 50px;">
                            </div>
                            <div class="col-abt">
                                <p style="font-size: 20px; font-weight: bold; color: rgb(238, 158, 83); border-left: 20px solid rgb(141, 105, 240); width: fit-content; margin-left: 40%;">Cannoli</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-menu">
                    <a href="main-menu.php" style="color: seashell;"><p>SEE MORE<i class='fas fa-arrow-right' style='font-size:25px;color:rgb(241, 221, 163); padding: 0 0 0 10px;'></i></p>
                    </a>
                </div>
            </div>
        </div>

        <div id="Contact-Us">
            <div class="tajuk-contact">
                <h4>Contact Us</h4>
            </div>
            <div class="row-abt">
                <div class="col-abt">
                    <div class="contact1">
                        <p><b>Forget the Old Way, We are Everywhere</b><br><br> Our social media:</p>
                        <i class='fab fa-instagram' style='font-size:48px;color:rgb(241, 174, 97)'></i>
                        <a href="https://www.instagram.com/_expresseat/" style="color: rgb(238, 158, 83); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Instagram</a>
                        <br>
                        <br>
                        <b><em>~ExpressEat Cafe</em></b></p>
                    </div>
                </div>
                <div class="col-abt">
                    <div class="contact2">
                        <p><b>You know what?</b>
                            <br> Food is essentials so <br> we are open 7 days a week,
                            <br>
                            9am to 9pm
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="footer-main">
            <div class="foot-last">
                <h1>&copy; Copyright 2021 MeowCat Team</h1>
            </div>
        </div>
    </div>
    <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("flexbox");
        var sticky = navbar.offsetTop;

        function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
    </script>
</body>
</html>
