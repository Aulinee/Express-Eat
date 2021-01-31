<?php
   include 'dbConnection.php';
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
         header("Location:../ExpressEat/loginAdmin.php"); 
      } 
   } 
   
   $user_check = $_SESSION['login_user'];
   
   //Set data for session
   $id_sql = mysqli_query($conn,"select ID from administrator where Username = '$user_check' ");
   $username_sql = mysqli_query($conn,"select Username from administrator where Username = '$user_check' ");
   $email_sql = mysqli_query($conn,"select Email from administrator where Username = '$user_check' ");
   $firstname_sql = mysqli_query($conn,"select FirstName from administrator where Username = '$user_check' ");
   $lastname_sql = mysqli_query($conn,"select LastName from administrator where Username = '$user_check' ");
   
   
   $row = mysqli_fetch_array($username_sql);
   $row1 = mysqli_fetch_array($firstname_sql);
   $row2 = mysqli_fetch_array($lastname_sql);
   $row9 = mysqli_fetch_array($id_sql);
   $row10 = mysqli_fetch_array($email_sql);
   
   $login_session = $row['Username'];
   $firstname = $row1['FirstName'];
   $lastname = $row2['LastName'];
   $id = $row9['ID'];
   $email = $row10['Email'];

   if(!isset($_SESSION['login_user'])){
      header("Location:../ExpressEat/loginAdmin.php"); 
      die();
   }
?>