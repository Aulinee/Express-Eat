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
    <title>Add New Product</title>
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
                    <li class="current"><a href="product.php">Product</a></li>
                    <li><a href="transaction.php">Transaction</a></li>
                    <li><a href="#"><i style="font-size:15px" class="fa">&#xf2be;</i> <?php echo $login_session; ?></a></li>
                    <li><a href = "logout.php">Sign Out</a></li>
                </ul>
           </nav>
        </div>
    </header>
     <div id="container-1">
        <div id="main-header">
            <h2 class="header">Add New Product</h2>
        </div>
        <div id="details-section">
          <form name="createItem" action="addItem.php" method="post">
              <div class="row">
                  <div class="col-25">
                    <label for="code">Code</label>
                  </div>
                  <div class="col-75">
                    <input type="number" id="code" name="codenumber" placeholder="1234">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="name">Item Name</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="name" name="itemname" placeholder="Chocolate cake">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="description">Item Description</label>
                  </div>
                  <div class="col-75">
                    <textarea name="description" id="description" cols="30" rows="10"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="qty">Quantity</label>
                  </div>
                  <div class="col-75">
                    <input type="number" id="qty" name="itemquantity" placeholder="1234">
                  </div>
                </div>
                <div class="row">
                    <div class="col-25">
                      <label for="price">Item Price</label>
                    </div>
                    <div class="col-75">
                      <input type="number" id="price" name="itemprice" placeholder="5.00">
                    </div>
                </div>
                <div class="submission">
                  <input class="btn register" type="submit" value="Add" onclick="return validateForm()">
                  <input class="btn clear" type="submit" value="Clear" onclick="return clearForm()">
                </div>
          </form>
        </div>
    </div>
    <script src="addProduct.js"></script>
</body>
</html>