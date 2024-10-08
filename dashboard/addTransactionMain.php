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
    <title>Add New Payment Record</title>
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
                    <li><a href="userAccount.php">User Account</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li class="current"><a href="transaction.php">Transaction</a></li>
                    <li><a href="#"><i style="font-size:15px" class="fa">&#xf2be;</i> <?php echo $login_session; ?></a></li>
                    <li><a href = "logout.php">Sign Out</a></li>
                </ul>
           </nav>
        </div>
    </header>
     <div id="container-1">
        <div id="main-header">
            <h2 class="header">Add New Payment Transaction</h2>
        </div>
        <div id="details-section">
          <form name="createPayment" action="addTransaction.php" method="post">
                <div class="row">
                    <div class="col-25">
                    <label for="name">Payment ID</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="checknum" name="checknum" placeholder="#AB12">
                    </div>
                </div>
              <div class="row">
                  <div class="col-25">
                    <label for="code">Customer ID</label>
                  </div>
                  <div class="col-75">
                    <input type="number" id="customerID" name="customerID" placeholder="1234">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="description">Payment Date</label>
                  </div>
                  <div class="col-75">
                    <input type="datetime-local" id="paymentdate" name="paymentdate" placeholder="1234">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="qty">Total Amount(RM)</label>
                  </div>
                  <div class="col-75">
                    <input type="number" id="amount" name="amount" placeholder="120.00">
                  </div>
                </div>
                <div class="submission">
                  <input class="btn register" type="submit" value="Add" onclick="return validateForm()">
                  <input class="btn clear" type="submit" value="Clear" onclick="return clearForm()">
                </div>
          </form>
        </div>
    </div>
    <script src="addTransaction.js"></script>
</body>
</html>