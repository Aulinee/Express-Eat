<?php 
ob_start();
include "dbConnection.php";
include "sessionAdmin.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $paymentID = $_POST['checknum'];
    $customerID = $_POST['customerID'];
    $date = $_POST['paymentdate'];
    $amount = $_POST['amount'];

    //Insert new product
    $sql = "INSERT INTO payment (CheckNum, CustomerID, PaymentDate, Amount)
    VALUES ('$paymentID', '$customerID', '$date', '$amount');";

    if ($conn->query($sql) === TRUE) {
        echo "New payment record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);

    // Redirect to main page
    header("Location: transaction.php");
    exit();
}
ob_flush_end();
?>