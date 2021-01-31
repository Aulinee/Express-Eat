<?php
ob_start();
include "dashboard/dbConnection.php";
include "session.php";

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['expresso']){
    $menu =  $_POST['expresso'];
    $total = $menu * 5; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '1', '$menu', '$total');";
}else if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['cappuccino']){
    $menu =  $_POST['cappuccino']; 
    $total = $menu * 7;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '2', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['latte']) {
    $menu =  $_POST['latte'];
    $total = $menu * 7; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '4', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['mocha']) {
    $menu =  $_POST['mocha']; 
    $total = $menu * 7;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '6', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['americano']) {
    $menu =  $_POST['americano']; 
    $total = $menu * 7;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '8', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['chocolate']) {
    $menu =  $_POST['chocolate'];
    $total = $menu * 7; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '10', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['greentea']) {
    $menu =  $_POST['greentea']; 
    $total = $menu * 7;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '12', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['chocolatefrappe']) {
    $menu =  $_POST['chocolatefrappe']; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '14', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['peachtea']) {
    $menu =  $_POST['peachtea']; 
    $total = $menu * 10;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '15', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['lemontea']) {
    $menu =  $_POST['lemontea'];
    $total = $menu * 7; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '16', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['sprite']) {
    $menu =  $_POST['sprite']; 
    $total = $menu * 3;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '3', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['coke']) {
    $menu =  $_POST['coke']; 
    $total = $menu * 3;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '18', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['plainwater']) {
    $menu =  $_POST['plainwater']; 
    $total = $menu * 2;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '17', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['a&w']) {
    $menu =  $_POST['a&w']; 
    $total = $menu * 3;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '19', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['sodafloat']) {
    $menu =  $_POST['sodafloat']; 
    $total = $menu * 4.5;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '20', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['vanillamilkshake']) {
    $menu =  $_POST['vanillamilkshake']; 
    $total = $menu * 7;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '23', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['strawberrymilkshake']) {
    $menu =  $_POST['strawberrymilkshake']; 
    $total = $menu * 7;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '25', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['chocolatemilkshake']) {
    $menu =  $_POST['chocolatemilkshake']; 
    $total = $menu * 7;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '21', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['oreomilkshake']) {
    $menu =  $_POST['oreomilkshake'];
    $total = $menu * 7; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '24', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['bananamilkshake']) {
    $menu =  $_POST['bananamilkshake'];
    $total = $menu * 7; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '5', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['redvelvet']) {
    $menu =  $_POST['redvelvet']; 
    $total = $menu * 9.50;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '31', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['darkforest']) {
    $menu =  $_POST['darkforest'];
    $total = $menu * 10.50; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '32', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['blueberrycheese']) {
    $menu =  $_POST['blueberrycheese']; 
    $total = $menu * 10.50;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '33', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['chocofudge']) {
    $menu =  $_POST['chocofudge']; 
    $total = $menu * 10.50;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '34', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['matcha']) {
    $menu =  $_POST['matcha'];
    $total = $menu * 9.50; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '35', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['tiramisu']) {
    $menu =  $_POST['tiramisu'];
    $total = $menu * 10.50; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '36', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['cannoli']) {
    $menu =  $_POST['cannoli'];
    $total = $menu * 3; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '37', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['churros']) {
    $menu =  $_POST['churros']; 
    $total = $menu * 3; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '38', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['cinnamon']) {
    $menu =  $_POST['cinnamon']; 
    $total = $menu * 3; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '39', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['currypuff']) {
    $menu =  $_POST['currypuff']; 
    $total = $menu * 3; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '40', '$menu', '$total');";
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['macaron']) {
    $menu =  $_POST['macaron']; 
    $total = $menu * 1.5; 

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '41', '$menu', '$total');";

}else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['pretzel']) {
    $menu =  $_POST['pretzel']; 
    $total = $menu * 4;

    $sql = "INSERT INTO order_list (CustomerID, ItemCode, Qty, TotalAmount)
    VALUES ('$id', '42', '$menu', '$total');";

}

 if (mysqli_query($conn, $sql)) {
    $error = "Add To Cart Successful!!";
    echo "Record updated successfully";
 } else {
    $error = "Cannot add to cart!! Please add again";
    echo "Error updating record: " . mysqli_error($conn);
 }

 mysqli_close($conn);
 //Redirect to main page
 header("Location: cart-mainpage.php");
 exit();
ob_end_flush();
?>