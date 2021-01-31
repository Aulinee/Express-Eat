<?php 
 include "dashboard/dbConnection.php";
 include "session.php";

 // Retrieve order record from order_list table that act as shopping cart
$SQLstring = "SELECT * FROM order_list WHERE CustomerID=$id";
$result = mysqli_query($conn, $SQLstring);

if($result = mysqli_query($conn, $SQLstring)){
    if(mysqli_num_rows($result) > 0){
      echo "<table cellpadding='0' cellspacing='0' border='0'>\n";
        while($row = mysqli_fetch_array($result)){
            echo "<tbody>";
                echo "<tr>";
                    echo "<td>" . $row['ItemCode'] . "</td>";
                    echo "<td>" . $row['Qty']. "</td>";
                    
                    //Retrieve item name from Item table
                    $code = $row['ItemCode'];
                    $sql = "SELECT Name From item WHERE Code=$code";
                    $result2 = mysqli_query($conn, $sql);
                    $row2 = mysqli_fetch_array($result2);
                    echo "<td>" . $row2['Name']. "</td>";

                    echo "<td>" . $row['TotalAmount']. "</td>";
                echo "</tr>";
            echo "</tbody>";
        }
      echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "Your Cart is Empty!!.";
    }
} else{
    echo "ERROR: Could not able to execute $SQLstring. " . mysqli_error($conn);
}

mysqli_close($conn);

?>