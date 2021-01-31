<?php
ob_start(); 
include 'dashboard/dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['usern'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address1 = $_POST['add-1'];
    $postal = $_POST['post'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $gender = $_POST['gender'];
    $password = $_POST['passw'];
    $country = "Malaysia";

    $new_phone = str_replace('+6', '', $phone);

    //Insert new customer
    $sql = "INSERT INTO customer (Username, Email, Password, FirstName, LastName, Gender, Phone, Address1, City, State, Country, PostalCode)
    VALUES ('$username', '$email', '$password', '$firstname', '$lastname', '$gender', '$new_phone', '$address1', '$city', '$state', '$country', '$postal');";

    if ($conn->query($sql) === TRUE) {
        echo "New Customer record created successfully";
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    mysqli_close($conn);
}
ob_end_flush();
?>