<?php
    // Include autoloader 
    require_once 'dompdf/autoload.inc.php'; 
    
    // Reference the Dompdf namespace 
    use Dompdf\Dompdf; 
    
    // Instantiate and use the dompdf class 
    $dompdf = new Dompdf();

    //It is possible to include a file that outputs html and store it in a variable 
    //using output buffering.
    ob_start();

    echo '<h1 style="font-style: italic; text-align: center; color: #ffa200;">ExpressEat</h1>';

    echo "<h1 style='color: black;'>TRANSACTION LIST</h1>";
    //To open and connect database
    include "dbConnection.php";

    // Retrieve all product record from customer Table in database
    $SQLstring = "SELECT * FROM payment";
    $result = mysqli_query($conn, $SQLstring);

    if($result = mysqli_query($conn, $SQLstring)){
        if(mysqli_num_rows($result) > 0){
        echo "<table style='font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;'>\n";
            echo '<thead style="background-color: #49b293;">';
              echo '<tr style="border: 1px solid #000; padding: 8px;">';
                  echo '<th style="border: 1px solid #000; padding: 8px;">Payment ID</th>';
                  echo '<th style="border: 1px solid #000; padding: 8px;">Customer ID</th>';
                  echo '<th style="border: 1px solid #000; padding: 8px;">Payment Date</th>';
                  echo '<th style="border: 1px solid #000; padding: 8px;">Amount(RM)</th>';
              echo '</tr>';
            echo '</thead>';
            while($row = mysqli_fetch_array($result)){
                echo "<tbody>";
                    echo "<tr style='border: 1px solid #000; padding: 8px; text-align: center;'>";
                        echo "<td style='border: 1px solid #000; padding: 8px; text-align: center;'>" . $row['CheckNum'] . "</td>";
                        echo "<td style='border: 1px solid #000; padding: 8px; text-align: center;'>" . $row['CustomerID'] . "</td>";
                        echo "<td style='border: 1px solid #000; padding: 8px; text-align: center;'>" . $row['PaymentDate'] . "</td>";
                        echo "<td style='border: 1px solid #000; padding: 8px; text-align: center;'>" . $row['Amount'] . "</td>";
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

   // Load content from html file 
    $html = ob_get_clean();
    $dompdf->loadHtml($html); 
    
    // (Optional) Setup the paper size and orientation 
    $dompdf->setPaper('A4', 'landscape'); 
    
    // Render the HTML as PDF 
    $dompdf->render(); 
    
    // Output the generated PDF (1 = download and 0 = preview) 
    $dompdf->stream("transactionList", array("Attachment" => 0));
?>