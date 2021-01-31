<?php 
ob_start();
include "dbConnection.php";
include 'sessionAdmin.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    mysqli_query($conn,'SET FOREIGN_KEY_CHECKS = 0');

    $deleteCol = $_POST['search-user'];
    $deleteColData = $_POST['user-data'];

    if($deleteCol == "ID"){
        // sql to delete a record
        $sql = "DELETE FROM customer WHERE ID = $deleteColData";
    }
    else if($deleteCol == "Username"){
        // sql to delete a record
        $sql = "DELETE FROM customer WHERE Username = '$deleteColData'";
    }

    if(mysqli_query($conn, $sql)){
        echo "Record deleted successfully";
        //Redirect to main page
        header("Location: userAccount.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
        //header("Location: deleteCustomerMain.php");
    }
    mysqli_query($conn,'SET foreign_key_checks = 1');
    mysqli_close($conn);
}
ob_flush_end();
?>