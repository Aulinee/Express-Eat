<?php 
ob_start();
include "dbConnection.php";
include "sessionAdmin.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    mysqli_query($conn,'SET FOREIGN_KEY_CHECKS = 0');
    $deleteCol = $_POST['delete-category'];
    $deleteColData = $_POST['delete-data'];

    if($deleteCol == "Code"){
        // sql to delete a record
        $sql = "DELETE FROM item WHERE Code = $deleteColData";
    }
    else if($deleteCol == "Name"){
        // sql to delete a record
        $sql = "DELETE FROM item WHERE Name = '$deleteColData'";
    }

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        //Redirect to main page
        header("Location: product.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
        header("Location: deleteItemMain.php");
    }
    
    mysqli_query($conn,'SET foreign_key_checks = 1');
    mysqli_close($conn);
}
ob_flush_end();
?>