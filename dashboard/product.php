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
    <title>Product</title>
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
                        <li class="current"><a href="product.php">Product</a></li>
                        <li><a href="transaction.php">Transaction</a></li>
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
    <!--List of Product -->
    <section class="table-1 customer-table">
        <h1>
            List of Product
            <button class="button tooltip">
                <span>
                    <a href="addProduct.html">&#43;</a>
                    <span class="tooltiptext">Click to add</span>
                </span>
            </button>
            <button class="button tooltip">
                <span>
                    <a href='updateItem.html'><i style='font-size:20px' class='fa'>&#xf040;</i></a>
                    <span class="tooltiptext">Click to update</span>
                </span>
            </button>
            <button class="button tooltip">
                <span>
                    <a href='deleteItem.html'><i style='font-size:20px' class='fa'>&#xf014;</i></a>
                    <span class="tooltiptext">Click to delete</span>
                </span>
            </button>
        </h1>
        <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Item Description</th>
                <th>Quantity</th>
                <th>Buy Price</th>
            </tr>
            </thead>
        </table>
        </div>
        <div class="tbl-content">
            <?php include 'itemList.php';?>
        </div>
    </section>
</body>
</html>