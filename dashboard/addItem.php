<?php 
ob_start();
include "dbConnection.php";
include "sessionAdmin.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $code = $_POST['codenumber'];
    $name = $_POST['itemname'];
    $description = $_POST['description'];
    $quantity = $_POST['itemquantity'];
    $price = $_POST['itemprice'];

    //Insert new product
    $sql = "INSERT INTO item (Code, Name, ItemDescription, QtyInStock, BuyPrice)
    VALUES ('$code', '$name', '$description', '$quantity', '$price');";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);

    // Redirect to main page
    header("Location: product.php");
    exit();
}
ob_flush_end();
?>