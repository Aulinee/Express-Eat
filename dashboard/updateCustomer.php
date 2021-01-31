<?php 
ob_start();
include "dbConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $searchCol = $_POST['search-user'];
    $searchColData = $_POST['search-data'];
    $updateCol = $_POST['replace-user'];
    $updateColData = $_POST['replace-data'];

    if($searchCol == "ID"){
        if($updateCol == "ID"){
            //Update product code
            $sql = "UPDATE customer SET ID = $updateColData WHERE ID = $searchColData";
        }
        else if($updateCol == "Username"){
            //Update product name
            $sql = "UPDATE customer SET Username = '$updateColData' WHERE ID = $searchColData";
        }
        else if($updateCol == "Firstname"){
            //Update product name
            $sql = "UPDATE customer SET Firstname = '$updateColData' WHERE ID = $searchColData";
        }
        else if($updateCol == "Lastname"){
            //Update product name
            $sql = "UPDATE customer SET Lastname = '$updateColData' WHERE ID = $searchColData";
        }
        else if($updateCol == "City"){
            //Update product name
            $sql = "UPDATE cCustomer SET City = '$updateColData' WHERE ID = $searchColData";
        }
        else if($updateCol == "State"){
            //Update product name
            $sql = "UPDATE customer SET State = '$updateColData' WHERE ID = $searchColData";
        }
        else if($updateCol == "Country"){
            //Update product name
            $sql = "UPDATE customer SET Country = '$updateColData' WHERE ID = $searchColData";
        }
    }
    else if($searchCol == "Username"){
        if($updateCol == "ID"){
            //Update product code
            $sql = "UPDATE customer SET ID = $updateColData WHERE Username = '$searchColData'";
        }
        else if($updateCol == "Username"){
            //Update product name
            $sql = "UPDATE customer SET Username = '$updateColData' WHERE Username = '$searchColData'";
        }
        else if($updateCol == "Firstname"){
            //Update product name
            $sql = "UPDATE customer SET Firstname = '$updateColData' WHERE Username = '$searchColData'";
        }
        else if($updateCol == "Lastname"){
            //Update product name
            $sql = "UPDATE customer SET Lastname = '$updateColData' WHERE Username = '$searchColData'";
        }
        else if($updateCol == "City"){
            //Update product name
            $sql = "UPDATE customer SET City = '$updateColData' WHERE Username = '$searchColData'";
        }
        else if($updateCol == "State"){
            //Update product name
            $sql = "UPDATE customer SET State = '$updateColData' WHERE Username = '$searchColData'";
        }
        else if($updateCol == "Country"){
            //Update product name
            $sql = "UPDATE customer SET Country = '$updateColData' WHERE Username = '$searchColData'";
        }
    }

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        //Redirect to main page
        header("Location: userAccount.php");
        exit();
    } else {
        header("Location: updateCustomerMain.php");
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);

}
ob_flush_end();
?>