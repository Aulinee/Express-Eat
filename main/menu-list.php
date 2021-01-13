<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../payment.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Menu List</title>
</head>
<body>
    <section class="main-content bg-menu">
        <header id="navbar" class="padding-1">
            <div class="container">
                <div id="branding" class="branding" style="font-size: 20px;">
                    <img class="main-logo" src="../img/Logo-04.png" alt="logo" width="50px">
                    <h1 class="main-title">ExpressEat Menu</h1>
                </div>
                <nav class="navigation-menu">
                    <ul>
                        <li><a href="#"><i style="font-size:15px" class="fa">&#xf015;</i>  Home</a></li>
                        <li class="current"><a href="main-menu.php"><i style="font-size:15px" class="fa">&#xf02d;</i>  Menu</a></li>
                        <li><a href="cart-mainpage.php"><i style="font-size:15px" class="fa">&#xf07a;</i></i>  Cart</a></li>
                        <li><a href="#"><i style='font-size:15px' class='fas'>&#xf406;</i> Login</a></li>
                    </ul>
               </nav>
            </div>
        </header>
        <div class="flexbox-container" id="top-section">
            <div class="flex" id="flexbox">
                <a href="#top-section">Top Of Page</a>
                <a href="#drink-section">Drinks</a>
                <a href="#cakepastry-section">Cake & Pastry</a>
                <a href="#waffle-section">Waffle</a>
                <a href="#pastapizza-section">Pasta & Pizza</a>
                <a href="#salad-section">Salad</a>
                <a href="#sidedish-section">Side Dish</a>
            </div>
            <div class="flex-1">
                <div class="title-list">
                    <h4>menu</h4>
                </div>
                <div class="navigate">
                    <a href="main-menu.php"><i class='fas'>&#xf060;</i>Back To Category</a>
                </div>
                <div class="navigate-right">
                    <a href="cart-mainpage.php">Check Shopping Cart<i class='fas'>&#xf061;</i></a>
                </div>
            </div>
            <div class="flex-2" id="drink-section">
                <h1>Drinks</h1>
                <div class="menu-all">
                    <div class="column-1">
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Coffee/expresso.jpg" alt="Expresso">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Espresso Coffee</h2>
                                    <h1 class="price">RM 5.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Full-flavored, concentrated form of coffee serve in shots.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement1()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment1()"><b>+</b></h1>
                                        <input id="expresso" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Coffee/cappucino.jpg" alt="Cappuccino">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Cappuccino Coffee</h2>
                                    <h1 class="price">RM 7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Even layer of espresso, steamed milk and foamed milk topped with brown sugar.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement2()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment2()"><b>+</b></h1>
                                        <input id="cappuccino" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Coffee/latte.jpg" alt="Latte">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Latte Coffee</h2>
                                    <h1 class="price">RM 7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Steamed milk with shot of espresso.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement3()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment3()"><b>+</b></h1>
                                        <input id="latte" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Coffee/mocha.jpg" alt="Mocha">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Mocha Coffee</h2>
                                    <h1 class="price">RM 7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Latte and premium cocoa powder with whipped cream drizzled with chocolate syrups.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement4()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment4()"><b>+</b></h1>
                                        <input id="mocha" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Coffee/americano.jpg" alt="">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Americano Coffee</h2>
                                    <h1 class="price">RM 7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Espresso and water.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement5()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment5()"><b>+</b></h1>
                                        <input id="americano" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Noncoffee/choc.jfif" alt="Chocolate">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Hot Chocolate Drink</h2>
                                    <h1 class="price">RM 7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Hot milk stirred with premium cocoa powder.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement6()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment6()"><b>+</b></h1>
                                        <input id="chocolate" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/NonCoffee/matcha-latte.jpg" alt="Green Tea">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Green Tea Latte</h2>
                                    <h1 class="price">RM 7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Matcha powder with vanilla extract, milk and syrup.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement7()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment7()"><b>+</b></h1>
                                        <input id="greentea" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/NonCoffee/chocfrappucino.png" alt="Chocolate Frappe">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Choco Frappuccino</h2>
                                    <h1 class="price">RM 10.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Chocolate sauce, milk, mocha and ice topped with whipped cream.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement8()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment8()"><b>+</b></h1>
                                        <input id="chocolatefrappe" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/NonCoffee/peachtea.png" alt="Peach Tea">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Peach Tea</h2>
                                    <h1 class="price">RM 7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Black tea served with homemade peach syrup.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement9()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment9()"><b>+</b></h1>
                                        <input id="peachtea" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/NonCoffee/lemontea.jpg" alt="Lemon Tea">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Lemon Tea</h2>
                                    <h1 class="price">RM 7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Black tea served with zesty lemon.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement10()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment10()"><b>+</b></h1>
                                        <input id="lemontea" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-2">
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Soft drinks/sprite.jfif" alt="Sprite">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Sprite</h2>
                                    <h1 class="price">RM 7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Refreshing classic sprite soda.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement19()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment19()"><b>+</b></h1>
                                        <input id="sprite" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Soft drinks/coke.jfif" alt="Coke">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Coke</h2>
                                    <h1 class="price">RM 3.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Refreshing classic coca cola.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement11()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment11()"><b>+</b></h1>
                                        <input id="coke" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/NonCoffee/plainwater.jpg" alt="Plain Water">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Plain Water</h2>
                                    <h1 class="price">RM 2.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Plain water served with preferred temperature.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement12()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment12()"><b>+</b></h1>
                                        <input id="plainwater" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Soft drinks/a&w.jfif" alt="A&W">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">A&W</h2>
                                    <h1 class="price">RM 3.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Mellow and creamy taste soda.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement13()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment13()"><b>+</b></h1>
                                        <input id="a&w" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Soft drinks/float.png" alt="Cola Float">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Soda Float</h2>
                                    <h1 class="price">RM 4.50</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Your choice of soda with our homemade vanilla ice cream.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement14()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment14()"><b>+</b></h1>
                                        <input id="sodafloat" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Milkshake/vanilla.jfif" alt="Vanilla Milkshake">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Vanilla Milkshake</h2>
                                    <h1 class="price">RM 7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Ice cream with milk, whipped cream.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement15()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment15()"><b>+</b></h1>
                                        <input id="vanillamilkshake" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Milkshake/strawberry.jfif" alt="Strawberry Milkshake">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Strawberry Milkshake</h2>
                                    <h1 class="price">RM 7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Strawberry ice cream with milk, whipped cream and fresh strawberry.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement16()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment16()"><b>+</b></h1>
                                        <input id="strawberrymilkshake" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Milkshake/choc milkshake.jfif" alt="Chocolate Milkshake">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Chocolate Milkshake</h2>
                                    <h1 class="price">RM 7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Chocolate ice cream with milk, whipped cream, chocolate chips and syrup.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement17()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment17()"><b>+</b></h1>
                                        <input id="chocolatemilkshake" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Milkshake/oreo.jfif" alt="Oreo Milkshake">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Oreo Milkshake</h2>
                                    <h1 class="price">RM 7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Oreo cream n` cookies ice cream with milk, whipped cream and topped with more Oreo cookies.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement18()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment18()"><b>+</b></h1>
                                        <input id="oreomilkshake" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Milkshake/banana milkshake.jpg" alt="Banana Milkshake">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Banana Milkshake</h2>
                                    <h1 class="price">RM 7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        A thick and creamy shake with the perfect ratio of banana fruit to ice cream to milk packed full of banana flavor.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrement20()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="increment20()"><b>+</b></h1>
                                        <input id="bananamilkshake" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-2" id="cakepastry-section">
                <h1>Cake & Pastry</h1>
                <div class="menu-all">
                    <div class="column-1">
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/cakes/red velvet.jpg" alt="Red Velvet">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Red Velvet Cake</h2>
                                    <h1 class="price">RM9.50/slice</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Velvety cake with mild taste of chocolate and buttermilk.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementcake1()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementcake1()"><b>+</b></h1>
                                        <input id="redvelvet" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/cakes/dark forest.jpg" alt="Dark Forest">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Dark Forest Cake</h2>
                                    <h1 class="price">RM10.50/slice</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Chocolate cake with cherries, and whipped cream covered with chocolate shavings.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementcake2()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementcake2()"><b>+</b></h1>
                                        <input id="darkforest" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/cakes/blueberry cheese.jpg" alt="Blueberry Cheese">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Blueberry Cheese Cake</h2>
                                    <h1 class="price">RM10.50/slice</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Cheesecake with homemade berry syrup and crushed blueberry.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementcake3()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementcake3()"><b>+</b></h1>
                                        <input id="blueberrycheese" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/cakes/choc fudge.jfif" alt="Choc Fudge">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Chocolate Fudge Cake</h2>
                                    <h1 class="price">RM10.50/slice</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Dense chocolate cake covered with melted chocolate.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementcake4()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementcake4()"><b>+</b></h1>
                                        <input id="chocofudge" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/cakes/matcha green tea.jpg" alt="Matcha Cake">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Matcha Cake</h2>
                                    <h1 class="price">RM9.50/slice</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Green tea cake layered cream cheese and rained with matcha powder.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementcake5()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementcake5()"><b>+</b></h1>
                                        <input id="matcha" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/cakes/tiramisu.jpg" alt="Tiramisu">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Tiramisu</h2>
                                    <h1 class="price">RM10.50/slice</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Ladyfinger cookies, espresso and chocolate cake with cocoa powder.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementcake6()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementcake6()"><b>+</b></h1>
                                        <input id="tiramisu" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-2">
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/pastries/cannoli.jfif" alt="Cannoli">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Cannoli</h2>
                                    <h1 class="price">RM3.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Italian pastry filled with handmade cannoli cream.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementcake7()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementcake7()"><b>+</b></h1>
                                        <input id="cannoli" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/pastries/churros.jpg" alt="Churros">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Churros</h2>
                                    <h1 class="price">RM3.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Spanish styled pastry with chocolate dips.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementcake8()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementcake8()"><b>+</b></h1>
                                        <input id="churros" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/pastries/cinnamon.jpg" alt="Cinnamon Rolls">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Cinnamon Rolls</h2>
                                    <h1 class="price">RM3.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Soft pastry made with a simple homemade dough, super fluffy and light!
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementcake9()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementcake9()"><b>+</b></h1>
                                        <input id="cinnamon" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/pastries/curry puff.jpg" alt="Curry Puff">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Curry Puff</h2>
                                    <h1 class="price">RM3.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Deep-fried crescent shaped pastries filled with spicy, sweet and savoury potato filling.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementcake10()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementcake10()"><b>+</b></h1>
                                        <input id="currypuff" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/pastries/macaroon.jfif" alt="Macaron">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Macaron</h2>
                                    <h1 class="price">RM1.50</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Colourful delicate, tender, sweet meringue with cream.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementcake11()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementcake11()"><b>+</b></h1>
                                        <input id="macaron" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/pastries/pretzel.jpg" alt="Pretzel">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Classic Pretzel</h2>
                                    <h1 class="price">RM4.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Soft knot shaped pastry covered with egg wash and bits of sesame.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementcake12()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementcake12()"><b>+</b></h1>
                                        <input id="pretzel" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-2" id="waffle-section">
                <h1>Waffle</h1>
                <div class="menu-all">
                    <div class="column-1">
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Waffle/classic waffle.jpg" alt="Classic Waffle">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Classic Waffle</h2>
                                    <h1 class="price">RM6.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Waffle with honey & butter.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementWaffle1()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementWaffle1()"><b>+</b></h1>
                                        <input id="classicwaffle" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Waffle/waffle with ice cream and syrup.jpg" alt="Waffle">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Belgian Waffle</h2>
                                    <h1 class="price">RM8.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Belgian waffle serve with homemade ice cream and maple syrup.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementWaffle2()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementWaffle2()"><b>+</b></h1>
                                        <input id="wafflesyrup" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Waffle/Belgian waffle + Ice cream + banana.jpg" alt="Waffle">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Belgian Waffle</h2>
                                    <h1 class="price">RM10.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Belgian waffle serve with homemade ice cream and banana.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementWaffle3()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementWaffle3()"><b>+</b></h1>
                                        <input id="wafflebanana" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-2">
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Waffle/Belgian waffle + Ice cream + oreo.jpg" alt="Waffle">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Belgian Waffle</h2>
                                    <h1 class="price">RM8.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Belgian waffle serve with homemade ice cream and Oreo cookies.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementWaffle4()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementWaffle4()"><b>+</b></h1>
                                        <input id="waffleoreo" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Waffle/Belgian waffle + Ice cream + ostrawberry.jpg" alt="Waffle">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Belgian Waffle</h2>
                                    <h1 class="price">RM12.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Belgian waffle serve with homemade ice cream and fresh strawberry.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementWaffle5()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementWaffle5()"><b>+</b></h1>
                                        <input id="wafflestrawberry" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Waffle/wafflenutellaberry.jpg" alt="Waffle">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Belgian Waffle</h2>
                                    <h1 class="price">RM12.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Belgian waffle serve with nutella and fresh strawberry.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementWaffle6()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementWaffle6()"><b>+</b></h1>
                                        <input id="wafflenutella" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-2" id="pastapizza-section">
                <h1>Pasta & Pizza</h1>
                <div class="menu-all">
                    <div class="column-1">
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Pasta/aglio olio.jpg" alt="Aglio Olio">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Aglio Olio</h2>
                                    <h1 class="price">RM13.50</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Linguini tossed in olive oil. Packed with fragrant herbs, capsicum, slightly spicy with a dash of vibrant chilli flakes.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementPasta1()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementPasta1()"><b>+</b></h1>
                                        <input id="aglio" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Pasta/carbonara.jpg" alt="Carbonara">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Carbonara</h2>
                                    <h1 class="price">RM13.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Spaghetti with parmesan cheese, egg yolk and cream.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementPasta2()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementPasta2()"><b>+</b></h1>
                                        <input id="carbonara" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Pasta/spaghetti bolognese.jpg" alt="Spaghetti Bolognese">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Spaghetti Bolognese</h2>
                                    <h1 class="price">RM13.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Spaghetti topped with Bolognese sauce of minced beef or chicken and mozzarella cheese.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementPasta3()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementPasta3()"><b>+</b></h1>
                                        <input id="bolognese" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-2">
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Pizza/PepperoninPizza.jpg" alt="Pepperoni Pizza">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Pepperoni Pizza</h2>
                                    <h1 class="price">RM20.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Crusty pizza with pepperoni, mozzarella and grated cheese.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementPizza1()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementPizza1()"><b>+</b></h1>
                                        <input id="pepperoni" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Pizza/hawaiian pizza.jpg" alt="Hawaiian Chicken">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Hawaiian Chicken Pizza</h2>
                                    <h1 class="price">RM20.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Crusty pizza with pineapple, cheese and chicken ham.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementPizza2()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementPizza2()"><b>+</b></h1>
                                        <input id="hawaiian" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Pizza/mix pizza.jpg" alt="Mix Pizza">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Mix Pizza</h2>
                                    <h1 class="price">RM32.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Combination of pepperoni cheese and Hawaiian chicken pizza.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementPizza3()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementPizza3()"><b>+</b></h1>
                                        <input id="mix" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-2" id="salad-section">
                <h1>Salad</h1>
                <div class="menu-all">
                    <div class="column-1">
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Salad/basic salad.jpg" alt="Classic Salad">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Classic House Salad</h2>
                                    <h1 class="price">RM9.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Creamy avocado, vibrant tomatoes, crisp cucumber, bright red onions and fresh herbs.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementSalad1()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementSalad1()"><b>+</b></h1>
                                        <input id="classicsalad" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Salad/chicken salad.jpg" alt="Chicken Salad">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Chicken Salad</h2>
                                    <h1 class="price">RM12.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        A cool twist on a simple chicken salad, with poached chicken breasts, roasted red bell peppers, toasted almonds, garlic and parsley.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementSalad2()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementSalad2()"><b>+</b></h1>
                                        <input id="chickensalad" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-2">
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Salad/seafood salad.jpeg" alt="Seafood Salad">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Seafood Salad</h2>
                                    <h1 class="price">RM15.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Shrimp and cherry tomatoes, olives, pepperoncini and bell peppers.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementSalad3()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementSalad3()"><b>+</b></h1>
                                        <input id="seafoodsalad" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Salad/fruitsalad.jpg" alt="Fruit Salad">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Fruit Salad</h2>
                                    <h1 class="price">RM9.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        A salad dish consisting of various kinds of fruit.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementSalad4()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementSalad4()"><b>+</b></h1>
                                        <input id="fruitsalad" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-2" id="sidedish-section">
                <h1>Side Dish</h1>
                <div class="menu-all">
                    <div class="column-1">
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Sides/chicken lasagna.jfif" alt="Chicken Lasagna">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Chicken Lasagna</h2>
                                    <h1 class="price">RM13.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Homemade chicken lasagna, served with mixed salad.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementSide1()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementSide1()"><b>+</b></h1>
                                        <input id="chickenlasagna" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Sides/beef lasagna.jpg" alt="Beef Lasagna">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Beef Lasagna</h2>
                                    <h1 class="price">RM15.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Homemade beef lasagna, served with mixed salad.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementSide2()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementSide2()"><b>+</b></h1>
                                        <input id="beeflasagna" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Sides/chicken wing.png" alt="Chicken Wing">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Chicken Wings</h2>
                                    <h1 class="price">RM15.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Six roasted chicken wings marinated with special sauces.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementSide3()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementSide3()"><b>+</b></h1>
                                        <input id="chickenwings" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Sides/sandwhich.jpg" alt="Sandwich">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Chicken Sandwich</h2>
                                    <h1 class="price">RM15.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        On grain bread, oven roasted chicken breast, cheese, cherry tomatoes, French mustard, light mayo.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementSide4()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementSide4()"><b>+</b></h1>
                                        <input id="sandwich" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-2">
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Sides/fries.jpg" alt="French fries">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">French Fries</h2>
                                    <h1 class="price">RM7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Golden homemade French fries serve with sauce.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementSide5()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementSide5()"><b>+</b></h1>
                                        <input id="frenchfries" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Sides/mashed potato.jpg" alt="Mashed Potato">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Mashed Potato</h2>
                                    <h1 class="price">RM7.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Enjoy our mashed potato with toppings of your choice.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementSide6()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementSide6()"><b>+</b></h1>
                                        <input id="mashedpotato" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Sides/mac and chss.jpg" alt="Mac & Cheese">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Mac & Cheese</h2>
                                    <h1 class="price">RM10.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Macaroni pasta with prawns and mushroom topped with loads of mozzarella cheese and grilled till melted.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementSide7()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementSide7()"><b>+</b></h1>
                                        <input id="macncheese" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex-menu">
                            <div class="flex-menu-20">
                                <img src="../img/Soup/garlic soup.jpg" alt="Mushroom Soup">
                            </div>
                            <div class="flex-menu-80">
                                <div class="menu-col-30">
                                    <h2 class="title">Mushroom Soup</h2>
                                    <h1 class="price">RM12.00</h1>
                                </div>
                                <div class="menu-col-40">
                                    <p class="description">
                                        Mushroom soup with crispy garlic bread.
                                    </p>
                                </div>
                                <div class="menu-col-30-1">
                                    <form name="menu" action="/orderMenu.php" method="post">
                                        <button class="cart" type="submit"><i style="font-size:15px" class="fa">&#xf07a;</i></button>
                                        <h1 class="toggle" onclick="decrementSide8()"><b>-</b></h1>
                                        <h1 class="toggle" onclick="incrementSide8()"><b>+</b></h1>
                                        <input id="mushroom" type=number min=0 max=110>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="menu-footer">
            <h1>&copy; Copyright 2021 MeowCat Team</h1>
        </footer>
    </section>
    <script src="menu.js"></script>
</body>
</html>