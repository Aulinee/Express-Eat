<?php 
    //To open and connect database
    include "dashboard/dbConnection.php";
    include('session.php');

    $result= mysqli_query($conn,"SELECT SUM(TotalAmount) AS totalsum FROM order_list WHERE CustomerID=$id");
    $row = mysqli_fetch_assoc($result); 
    $sum = $row['totalsum'];
    mysqli_close($conn);
?>