<?php
   include 'dashboard/dbConnection.php';
   // Set sessions
   if(!isset($_SESSION)) {
      session_start();
   }

   if(isset($_SESSION['login_user']))  
   { 
      if(time()-$_SESSION["login_time_stamp"] >1800)   
      { 
         session_unset(); 
         session_destroy(); 
         header("Location:login.php"); 
      } 
   } 
   
   $user_check = $_SESSION['login_user'];
   
   //Set data for session
   $id_sql = mysqli_query($conn,"select ID from customer where Username = '$user_check' ");
   $username_sql = mysqli_query($conn,"select Username from customer where Username = '$user_check' ");
   $email_sql = mysqli_query($conn,"select Email from customer where Username = '$user_check' ");
   $firstname_sql = mysqli_query($conn,"select FirstName from customer where Username = '$user_check' ");
   $lastname_sql = mysqli_query($conn,"select LastName from customer where Username = '$user_check' ");
   $phonenumber_sql = mysqli_query($conn,"select Phone from customer where Username = '$user_check' ");
   $address1_sql = mysqli_query($conn,"select Address1 from customer where Username = '$user_check' ");
   $postalcode_sql = mysqli_query($conn,"select PostalCode from customer where Username = '$user_check' ");
   $City_sql = mysqli_query($conn,"select City from customer where Username = '$user_check' ");
   $State_sql = mysqli_query($conn,"select State from customer where Username = '$user_check' ");
   $Country_sql = mysqli_query($conn,"select Country from customer where Username = '$user_check' ");
   
   $row = mysqli_fetch_array($username_sql);
   $row1 = mysqli_fetch_array($firstname_sql);
   $row2 = mysqli_fetch_array($lastname_sql);
   $row3 = mysqli_fetch_array($phonenumber_sql);
   $row4 = mysqli_fetch_array($address1_sql);
   $row5 = mysqli_fetch_array($postalcode_sql);
   $row6 = mysqli_fetch_array($City_sql);
   $row7 = mysqli_fetch_array($State_sql);
   $row8 = mysqli_fetch_array($Country_sql);
   $row9 = mysqli_fetch_array($id_sql);
   $row10 = mysqli_fetch_array($email_sql);
   
   $login_session = $row['Username'];
   $firstname = $row1['FirstName'];
   $lastname = $row2['LastName'];
   $phone = $row3['Phone'];
   $address = $row4['Address1'];
   $postal = $row5['PostalCode'];
   $city = $row6['City'];
   $state = $row7['State'];
   $country = $row8['Country'];
   $id = $row9['ID'];
   $email = $row10['Email'];

   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>