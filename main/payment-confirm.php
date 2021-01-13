<?php 
    include "../dashboard/dbConnection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // $code = $_POST['codenumber'];
        // $name = $_POST['itemname'];
        // $description = $_POST['description'];
        // $quantity = $_POST['itemquantity'];
        // $price = $_POST['itemprice'];
    
        // //Insert new product
        // $sql = "INSERT INTO Item (Code, Name, ItemDescription, QtyInStock, BuyPrice)
        // VALUES ('$code', '$name', '$description', '$quantity', '$price');";
    
        // if ($conn->query($sql) === TRUE) {
        //     echo "alert('New record created successfully')";
        //     // Redirect to main page
        //     header("Location: main-menu.php");
        //     exit();
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }

        echo 'New record created successfully';
        // Redirect to main page
        header("Location: main-menu.php");
        exit();
    
        mysqli_close($conn);
    }
?>