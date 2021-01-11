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
    <title>User Account</title>
</head>
<body>
    <?php 
        //To open and connect database
        include "dbConnection.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){

        }
    ?>
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
                        <li class="current"><a href="userAccount.php">User Account</a></li>
                        <li><a href="product.php">Product</a></li>
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
    <!-- <div class="wrap">
        <h1 class="list-title">USER ACCOUNT LIST</h1>
        <form name="search-table" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="What are you looking for?">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div class="filter-container">
                <input type="radio" id="All" name="categories" value="All" checked>
                <input type="radio" id="Username" name="categories" value="Username">
                <input type="radio" id="Firstname" name="categories" value="Firstname">
                <input type="radio" id="Lastname" name="categories" value="Lastname">
                <input type="radio" id="City" name="categories" value="City">
                <input type="radio" id="State" name="categories" value="State">
                <input type="radio" id="Country" name="categories" value="Country">
                <ol class="filters">
                <li>
                    <label for="All">All</label>
                </li>
                <li>
                    <label for="Username">Username</label>
                </li>
                <li>
                    <label for="Firstname">First Name</label>
                </li>
                <li>
                    <label for="Lastname">Last Name</label>
                </li>
                <li>
                    <label for="City">City</label>
                </li>
                <li>
                    <label for="State">State</label>
                </li>
                <li>
                    <label for="Country">Country</label>
                </li>
                </ol>
            </div>
        </form>
    </div> -->
    <!--List of Customer -->
    <section class="table-1 customer-table">
        <h1>
            List of Users Account 
            <button class="button tooltip">
                <span>
                    <a href="addCustomer.html">&#43;</a>
                    <span class="tooltiptext">Click to add</span>
                </span>
            </button>
            <button class="button tooltip">
                <span>
                    <a href='updateCustomer.html'><i style='font-size:20px' class='fa'>&#xf040;</i></a>
                    <span class="tooltiptext">Click to update</span>
                </span>
            </button>
            <button class="button tooltip">
                <span>
                    <a href='deleteCustomer.html'><i style='font-size:20px' class='fa'>&#xf014;</i></a>
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
                <th>Action</th>
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