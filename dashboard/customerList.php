<?php 
//To open and connect database
include "dbConnection.php";

// Retrieve product record from customer Table in database
$SQLstring = "SELECT * FROM Customer";
$result = mysqli_query($conn, $SQLstring);

if($result = mysqli_query($conn, $SQLstring)){
    if(mysqli_num_rows($result) > 0){
      echo "<table cellpadding='0' cellspacing='0' border='0'>\n";
        while($row = mysqli_fetch_array($result)){
            echo "<tbody>";
                echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" . $row['Username'] . "</td>";
                    echo "<td>" . $row['FirstName']. " ". $row['LastName'] . "</td>";
                    echo "<td>" . $row['Email']. "</td>";
                    echo "<td>". "+60" . $row['Phone']. "</td>";
                    echo "<td>" . $row['Address1']. " ". $row['Address2'] . " ". $row['PostalCode'] ." ". $row['City'] ." ". $row['State'] ." ". $row['Country'] ."</td>";
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