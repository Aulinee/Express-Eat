<?php 
include "dbConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $searchCol = $_POST['search-category'];
    $searchColData = $_POST['search-data'];
    $updateCol = $_POST['replace-category'];
    $updateColData = $_POST['replace-data'];

    if($searchCol == "Code"){
        if($updateCol == "Code"){
            //Update product code
            $sql = "UPDATE Item SET Code = $updateColData WHERE Code = $searchColData";
        }
        else if($updateCol == "Name"){
            //Update product name
            $sql = "UPDATE Item SET Name = '$updateColData' WHERE Code = $searchColData";
        }
        else if($updateCol == "ItemDescription"){
            //Update product name
            $sql = "UPDATE Item SET ItemDescription = '$updateColData' WHERE Code = $searchColData";
        }
        else if($updateCol == "QtyInStock"){
            //Update product name
            $sql = "UPDATE Item SET QtyInStock = '$updateColData' WHERE Code = $searchColData";
        }
        else if($updateCol == "BuyPrice"){
            //Update product name
            $sql = "UPDATE Item SET BuyPrice = '$updateColData' WHERE Code = $searchColData";
        }
    }
    else if($searchCol == "Name"){
        if($updateCol == "Code"){
            //Update product code
            $sql = "UPDATE Item SET Code = $updateColData WHERE Name = $searchColData";
        }
        else if($updateCol == "Name"){
            //Update product name
            $sql = "UPDATE Item SET Name = '$updateColData' WHERE Name = $searchColData";
        }
        else if($updateCol == "ItemDescription"){
            //Update product name
            $sql = "UPDATE Item SET ItemDescription = '$updateColData' WHERE Name = $searchColData";
        }
        else if($updateCol == "QtyInStock"){
            //Update product name
            $sql = "UPDATE Item SET QtyInStock = '$updateColData' WHERE Name = $searchColData";
        }
        else if($updateCol == "BuyPrice"){
            //Update product name
            $sql = "UPDATE Item SET BuyPrice = '$updateColData' WHERE Name = $searchColData";
        }
    }

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
      }

    mysqli_close($conn);

    //Redirect to main page
    header("Location: product.php");
    exit();
}

?>