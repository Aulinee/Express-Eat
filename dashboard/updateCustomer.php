<?php 
include "dbConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $searchCol = $_POST['search-user'];
    $searchColData = $_POST['search-data'];
    $updateCol = $_POST['replace-user'];
    $updateColData = $_POST['replace-data'];

    if($searchCol == "ID"){
        if($updateCol == "ID"){
            //Update product code
            $sql = "UPDATE Customer SET ID = $updateColData WHERE ID = $searchColData";
        }
        else if($updateCol == "Username"){
            //Update product name
            $sql = "UPDATE Customer SET Username = '$updateColData' WHERE ID = $searchColData";
        }
        else if($updateCol == "Firstname"){
            //Update product name
            $sql = "UPDATE Customer SET Firstname = '$updateColData' WHERE ID = $searchColData";
        }
        else if($updateCol == "Lastname"){
            //Update product name
            $sql = "UPDATE Customer SET Lastname = '$updateColData' WHERE ID = $searchColData";
        }
        else if($updateCol == "City"){
            //Update product name
            $sql = "UPDATE Customer SET City = '$updateColData' WHERE ID = $searchColData";
        }
        else if($updateCol == "State"){
            //Update product name
            $sql = "UPDATE Customer SET State = '$updateColData' WHERE ID = $searchColData";
        }
        else if($updateCol == "Country"){
            //Update product name
            $sql = "UPDATE Customer SET Country = '$updateColData' WHERE ID = $searchColData";
        }
    }
    else if($searchCol == "Username"){
        if($updateCol == "ID"){
            //Update product code
            $sql = "UPDATE Customer SET ID = $updateColData WHERE Username = $searchColData";
        }
        else if($updateCol == "Username"){
            //Update product name
            $sql = "UPDATE Customer SET Username = '$updateColData' WHERE Username = $searchColData";
        }
        else if($updateCol == "Firstname"){
            //Update product name
            $sql = "UPDATE Customer SET Firstname = '$updateColData' WHERE Username = $searchColData";
        }
        else if($updateCol == "Lastname"){
            //Update product name
            $sql = "UPDATE Customer SET Lastname = '$updateColData' WHERE Username = $searchColData";
        }
        else if($updateCol == "City"){
            //Update product name
            $sql = "UPDATE Customer SET City = '$updateColData' WHERE Username = $searchColData";
        }
        else if($updateCol == "State"){
            //Update product name
            $sql = "UPDATE Customer SET State = '$updateColData' WHERE Username = $searchColData";
        }
        else if($updateCol == "Country"){
            //Update product name
            $sql = "UPDATE Customer SET Country = '$updateColData' WHERE Username = $searchColData";
        }
    }

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
      }

    mysqli_close($conn);

    //Redirect to main page
    header("Location: userAccount.php");
    exit();
}

?>