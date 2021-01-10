<?php 
include "dbConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $deleteCol = $_POST['search-user'];
    $deleteColData = $_POST['user-data'];

    if($deleteCol == "ID"){
        // sql to delete a record
        $sql = "DELETE FROM Customer WHERE ID = $deleteColData";
    }
    else if($deleteCol == "Username"){
        // sql to delete a record
        $sql = "DELETE FROM Customer WHERE Username = '$deleteColData'";
    }

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        //Redirect to main page
        header("Location: userAccount.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
        header("Location: deleteCustomer.html");
    }

    mysqli_close($conn);

}

?>