<?php 
include "dbConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $deleteCol = $_POST['delete-category'];
    $deleteColData = $_POST['delete-data'];

    if($deleteCol == "CheckNum"){
        // sql to delete a record
        $sql = "DELETE FROM Payment WHERE CheckNum = '$deleteColData'";
    }

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        //Redirect to main page
        header("Location: transaction.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
        header("Location: deleteTransaction.html");
    }
    
    mysqli_close($conn);
}

?>