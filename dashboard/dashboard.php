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
    <title>Dashboard</title>
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
                        <li class="current"><a href="dashboard.php">Home</a></li>
                        <li><a href="userAccount.php">User Account</a></li>
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
    <section id="summary-button">
        <div class="flexbox-container-1 summary-box">
            <h1 id="total-text">Total Sales</h1>
            <h2 id="total-sales">3333</h2>
        </div>
        <div class="flexbox-container-1 summary-box">
            <h1 id="total-text">Total User</h1>
            <h2 id="total-user">3333</h2>
        </div>
        <div class="flexbox-container-1 summary-box">
            <h1 id="total-text">Total order</h1>
            <h2 id="total-order">3333</h2>
        </div>
    </section>
    <!--List of Customer -->
    <section class="table-1">
        <h1>
          List of Users Account 
          <button class="button tooltip" >
            <span style='font-size:40px;'>
              <a href="userAccount.php">&#8594;</a>
              <span class="tooltiptext">Click to edit</span>
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
      <!--List of Product -->
      <section class="table-1">
        <h1>
          List of Products
          <button class="button tooltip" >
            <span style='font-size:40px;'>
              <a href="product.php">&#8594;</a>
              <span class="tooltiptext">Click to edit</span>
            </span>
          </button>
        </h1>
        <div class="tbl-header">
          <table cellpadding="0" cellspacing="0" border="0">
            <thead>
              <tr>
                <th>Code</th>
                <th>Company</th>
                <th>Price</th>
                <th>Change</th>
                <th>Change %</th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="tbl-content">
          <?php include 'itemList.php';?>
        </div>
      </section>
      <!--List of Order -->
      <section class="table-1">
        <h1>
          Order Transaction
          <button class="button tooltip">
            <span style='font-size:40px;'>
              <a href="transaction.php">&#8594;</a>
              <span class="tooltiptext">Click to edit</span>
            </span>
          </button>
        </h1>
        <div class="tbl-header">
          <table cellpadding="0" cellspacing="0" border="0">
            <thead>
              <tr>
                <th>Code</th>
                <th>Company</th>
                <th>Price</th>
                <th>Change</th>
                <th>Change %</th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="tbl-content">
          <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
              <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td>-0.36%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
      
</body>
</html>