<?php
   include('sessionAdmin.php');
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
    <title>User Account</title>
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
                    <li><a href="dashboard.php">Home</a></li>
                    <li class="current"><a href="userAccount.php">User Account</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="transaction.php">Transaction</a></li>
                    <li><a href="#"><i style="font-size:15px" class="fa">&#xf2be;</i> <?php echo $login_session; ?></a></li>
                    <li><a href = "logout.php">Sign Out</a></li>
                </ul>
           </nav>
        </div>
    </header>
    <!--List of Customer -->
    <section class="table-1 customer-table">
        <h1>
            List of Users Account 
            <button class="button tooltip">
                <span>
                    <a href='updateCustomerMain.php'><i style='font-size:20px' class='fa'>&#xf040;</i></a>
                    <span class="tooltiptext">Click to update</span>
                </span>
            </button>
            <button class="button tooltip">
                <span>
                    <a href='deleteCustomerMain.php'><i style='font-size:20px' class='fa'>&#xf014;</i></a>
                    <span class="tooltiptext">Click to delete</span>
                </span>
            </button>
        </h1>
        <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>Customer ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Mobile Number</th>
                <th>Home Address</th>
            </tr>
            </thead>
        </table>
        </div>
        <div class="tbl-content">
            <?php include 'customerList.php';?>
        </div>
    </section>
</body>
</html>