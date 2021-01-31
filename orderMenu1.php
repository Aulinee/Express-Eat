<?php 
ob_start();
include "dashboard/dbConnection.php";
include "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['classicwaffle']) {
    $menu =  $_POST['classicwaffle']; 
    $total = $menu * 6;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '26', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['wafflesyrup']) {
    $menu =  $_POST['wafflesyrup'];
    $total = $menu * 8; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '27', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['wafflebanana']) {
    $menu =  $_POST['wafflebanana'];
    $total = $menu * 10; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '28', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['waffleoreo']) {
    $menu =  $_POST['waffleoreo'];
    $total = $menu * 8; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '29', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['wafflestrawberry']) {
    $menu =  $_POST['wafflestrawberry'];
    $total = $menu * 12; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '30', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['wafflenutella']) {
    $menu =  $_POST['wafflenutella'];
    $total = $menu * 12; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '7', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aglio']) {
    $menu =  $_POST['aglio'];
    $total = $menu * 13.5; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '47', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['carbonara']) {
    $menu =  $_POST['carbonara'];
    $total = $menu * 13; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '48', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['bolognese']) {
    $menu =  $_POST['bolognese'];
    $total = $menu * 13; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '49', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['pepperoni']) {
    $menu =  $_POST['pepperoni'];
    $total = $menu * 20; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '50', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['hawaiian']) {
    $menu =  $_POST['hawaiian'];
    $total = $menu * 20; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '51', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['mix']) {
    $menu =  $_POST['mix'];
    $total = $menu * 32; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '52', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['classicsalad']) {
    $menu =  $_POST['classicsalad'];
    $total = $menu * 9; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '43', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['chickensalad']) {
    $menu =  $_POST['chickensalad'];
    $total = $menu * 12; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '44', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['seafoodsalad']) {
    $menu =  $_POST['seafoodsalad'];
    $total = $menu * 15; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '45', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['fruitsalad']) {
    $menu =  $_POST['fruitsalad'];
    $total = $menu * 9; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '57', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['chickenlasagna']) {
    $menu =  $_POST['chickenlasagna'];
    $total = $menu * 13; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '53', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['beeflasagna']) {
    $menu =  $_POST['beeflasagna'];
    $total = $menu * 15; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '54', '$menu', '$total');";

}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['chickenwings']) {
    $menu =  $_POST['chickenwings']; 
    $total = $menu * 15;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '55', '$menu', '$total');";

}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['sandwich']) {
    $menu =  $_POST['sandwich'];
    $total = $menu * 15; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '56', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['frenchfries']) {
    $menu =  $_POST['frenchfries'];
    $total = $menu * 7; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '58', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['mashedpotato']) {
    $menu =  $_POST['mashedpotato'];
    $total = $menu * 7; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '59', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['macncheese']) {
    $menu =  $_POST['macncheese'];
    $total = $menu * 10; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '60', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['mushroom']) {
    $menu =  $_POST['mushroom'];
    $total = $menu * 12; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '46', '$menu', '$total');";
}

if (mysqli_query($conn, $sql)) {
    $error = "Add To Cart Successful!!";
    echo "Record updated successfully";
 } else {
    $error = "Cannot add to cart!! Please add again";
    echo "Error updating record: " . mysqli_error($conn);
 }
//Redirect to main page
header("Location: cart-mainpage.php");
exit();
ob_end_flush();
?>