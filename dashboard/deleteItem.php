<?php 
include "dbConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $deleteCol = $_POST['delete-category'];
    $deleteColData = $_POST['delete-data'];

    if($deleteCol == "Code"){
        // sql to delete a record
        $sql = "DELETE FROM Item WHERE Code = $deleteColData";
    }
    else if($deleteCol == "Name"){
        // sql to delete a record
        $sql = "DELETE FROM Item WHERE Name = '$deleteColData'";
    }

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        //Redirect to main page
        header("Location: product.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
        header("Location: deleteItem.html");
    }
    
    mysqli_close($conn);
}

?>