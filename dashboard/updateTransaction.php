<?php 
include "dbConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $searchCol = $_POST['search-user'];
    $searchColData = $_POST['search-data'];
    $updateCol = $_POST['replace-user'];
    $updateColData = $_POST['replace-data'];

    if($searchCol == "CheckNum"){
        if($updateCol == "CheckNum"){
            //Update product code
            $sql = "UPDATE Payment SET CheckNum = $updateColData WHERE CheckNum = '$searchColData'";
        }
        else if($updateCol == "CustomerID"){
            //Update product name
            $sql = "UPDATE Payment SET CustomerID = '$updateColData' WHERE CheckNum = '$searchColData'";
        }
        else if($updateCol == "PaymentDate"){
            //Update product name
            $sql = "UPDATE Payment SET PaymentDate = '$updateColData' WHERE CheckNum = '$searchColData'";
        }
        else if($updateCol == "Amount"){
            //Update product name
            $sql = "UPDATE Payment SET Amount = '$updateColData' WHERE CheckNum = '$searchColData'";
        }
    }
   

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        //Redirect to main page
        header("Location: transaction.php");
        exit();
    } else {
        header("Location: updateItem.html");
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);

}