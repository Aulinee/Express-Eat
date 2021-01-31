<?php 
include 'dashboard/dbConnection.php';

$error ="";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $myusername = $_POST['usern'];
    $mypassword = $_POST['passw']; 
    
    $sql = "SELECT ID FROM customer WHERE Username = '$myusername' and Password = '$mypassword'";
    
    
    $result = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
        // Set sessions
        if(!isset($_SESSION)) {
           session_start();
        }
       $_SESSION['login_user'] = $myusername;
        // Login time is stored in a session variable 
        $_SESSION["login_time_stamp"] = time(); 
          
       header("location: main.php");
    }else {
       $error = "Your Login Name or Password is invalid";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Login</title>
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="left">
                <div class="word">
                    <img src="img/Logo-04.png" alt="small-logo">
                    <h1>ExpressEat</h1>
                </div>
                <div class="word-2">
                    <h1 id="welcome">welcome!</h1>
                    <h1 id="sign">sign in here</h1>
                    <h1 id="newhere">new <b style="color:black;">USER</b> here?<b> sign up now!</b></h1>
                    <h3 id="create"><a href="register.php" >Create An Account</a></h3>
                </div>
            </div>
            <div class="right">
                <div class="form-box">
                    <h1>Sign In As User</h1>
                    <hr>
                    <form name="login" method="POST" action="">
                        <div style = "font-size:20px; color:#cc0000; margin-top:10px; text-align: center;"><?php echo $error; ?></div>
                        <div>
                            <p>USERNAME</p>
                            <i class='fas fa-user-alt' style="color: #ffa200;"></i>  <input class="input-element" type="text" name="usern" id="usern" placeholder="Enter username">
                        </div>
                        <div class="error" id="usernameErr"></div>
                        <div>
                            <p>PASSWORD</p>
                            <i class='fas fa-unlock-alt' style="color: #ffa200;"></i>  <input class="input-element" type="password" name="passw" id="psw" placeholder="Enter password">
                        </div>
                        <div class="error" id="passwordErr"></div>
                        <br>
                        <br>
                        <div id="butang">
                            <button type="submit" onclick="return register()">Sign In</button>
                            &nbsp;
                            <input  id="butang" type="reset" value="Clear Form" onclick="clearFunc()" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    function register()
	{
        var uname= document.getElementById("usern").value;
        var pwd= document.getElementById("psw").value;
		
        //regex code
		var pwd_expression = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])[A-Za-z\d!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]{6,6}$/;
        var usrname = /^[A-Za-z]+$/;

		if(uname=='')
        {
            alert('Please enter your username');
            return false;
        }
        else if(!usrname.test(uname))
        {
            alert('Name field required only alphabet characters');
            return false;
        }
        else if(pwd=='')
        {
             alert('Please enter Password');
            return false;
        }
        else if(!pwd_expression.test(pwd))
        {
            alert ('At least ONE Uppercase, ONE Lowercase, ONE Special character, ONE Numeric letter and 6 DIGITS LENGTH are required in Password filed');
            return false;
        }
    }

        function clearFunc()
        {
            document.getElementById("usern").value="";
            document.getElementById("psw").value="";			
        }

    </script>
</body>
</html>