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
    <title>Delete Customer Account</title>
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
    <div class="update-box">
        <h1 class="list-title">DELETE CUSTOMER ACCOUNT</h1>
        <form name="search-table" action="deleteCustomer.php" method="post">
            <div class="search-box">
                <h2>Search By</h2>
                <div class="filter-container">
                    <input type="radio" id="searchID" name="search-user" value="ID" checked>
                    <input type="radio" id="searchUsername" name="search-user" value="Username">
                    <ol class="filters">
                    <li>
                        <label for="searchID">Customer ID</label>
                    </li>
                    <li>
                        <label for="searchUsername">Username</label>
                    </li>
                    </ol>
                </div>
                <div class="user-box">
                    <input type="text" name="user-data">
                    <label>Delete Detail</label>
                </div>
            </div>
            <button type="submit" onclick="return validateFormDelete()">
                Submit
            </button>
        </form>
    </div>
    <script src="editCustomer.js"></script>
</body>
</html>