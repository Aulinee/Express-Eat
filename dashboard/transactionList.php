<?php 
include "dbConnection.php";
include "sessionAdmin.php";

// Retrieve all product record from customer Table in database
$SQLstring = "SELECT * FROM payment";
$result = mysqli_query($conn, $SQLstring);

if($result = mysqli_query($conn, $SQLstring)){
    if(mysqli_num_rows($result) > 0){
    echo "<table cellpadding='0' cellspacing='0' border='0'>\n";
        while($row = mysqli_fetch_array($result)){
            echo "<tbody>";
                echo "<tr>";
                    echo "<td>" . $row['CheckNum'] . "</td>";
                    echo "<td>" . $row['CustomerID'] . "</td>";
                    echo "<td>" . $row['PaymentDate'] . "</td>";
                    echo "<td>" . $row['Amount'] . "</td>";
                echo "</tr>";
            echo "</tbody>";
        }
    echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $SQLstring. " . mysqli_error($conn);
}
mysqli_close($conn);
?>