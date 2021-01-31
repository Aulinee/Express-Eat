<?php
    ob_start();
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\POP3;
    include "dashboard/dbConnection.php";
    include "session.php";

    // Load Composer's autoloader
    require 'vendor/autoload.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST" ){
        date_default_timezone_set("Asia/Kuching");

        $paymentID = $_POST['id'];
        $new_paymentID = str_replace(' ', '', $paymentID);
        $name = $_POST['name'];
        $addrress = $_POST['address'];
        $phone = $_POST['phone'];
        $date = date('Y-m-d');
        $total = $_POST['total'];

        if(!preg_match("/[0-9]/", $total)){
            header("Location: payment.php");
        }else {
            //Insert new product
            $sql_insert = "INSERT INTO payment (CheckNum, CustomerID, PaymentDate, Amount)
            VALUES ('$new_paymentID', '$id', '$date', '$total');";
        
            if (mysqli_query($conn, $sql_insert)) {
                echo "alert('New record created successfully')";
            } else {
                echo "Error: " . $sql_insert . "<br>" . $conn->error;
            }

            //Update Inventory in item list
            $sql = "SELECT * FROM order_list WHERE CustomerID=$id";
            $result = mysqli_query($conn, $sql);

            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        //Set item code
                        $code = $row["ItemCode"];

                        //find total quantity in item table
                        $sql_find = "SELECT * FROM item WHERE Code = $code";
                        $result_find = mysqli_query($conn, $sql_find);
                        $row_find = mysqli_fetch_array($result_find);
                        $total_qty = $row_find["QtyInStock"];

                        //Update quantity
                        $qty = $row['Qty'];
                        $update_qty = $total_qty - $qty;
                        $sql_update = "UPDATE item SET QtyInStock = $update_qty WHERE Code = $code";
                        if (mysqli_query($conn, $sql_update)) {
                            echo "Record updated successfully";
                        } else {
                            echo "Error updating record: " . mysqli_error($conn);
                        }
                    }
                    mysqli_free_result($result);
                }else{
                    echo "No records matching your query were found.";
                }
            }else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }

            //Delete from order_list table which act as shopping cart
            $sql_delete = "DELETE FROM order_list WHERE CustomerID = $id";

            if (mysqli_query($conn, $sql_delete)) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
            }
            
        }

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'expresseatxoxo@gmail.com';                // SMTP username
            $mail->Password   = 'aydyijclrrwmnzgr';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('expresseatxoxo@gmail.com', 'ExpressEat Cafe');
            $mail->addAddress($email);     // Add a recipient
            $mail->addReplyTo($email); 


            // Retrieve all payment record from payment Table in database
            $SQLstring = "SELECT * FROM payment WHERE CheckNum=$new_paymentID";
            $result = mysqli_query($conn, $SQLstring);
            $row = mysqli_fetch_array($result);

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Payment Receipt';
            $mail->Body    = '<table border="0" cellpadding="0" cellspacing="20px" width="auto" align="center" style:"padding: 30px;">
            <tr>
            <td align="center" >
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
                    <h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Thank you for your order!</h1>
                    </td>
                </tr>
            </td>
            </tr>
            <tr>
            <td align="center" >
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                        <h1>EXPRESS EAT CAFE</h1>
                    <p style="margin: 0;">Here is a summary of your recent order. If you have any questions or concerns about your order, please <a href="https://www.instagram.com/_expresseat/">contact us</a>.</p>
                    </td>
                </tr>
                <tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                    <table border="1" cellpadding="10px" cellspacing="0" width="100%">
                        <tr>
                        <td align="left" bgcolor="#D2C7BA" width="75%" style="padding: 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;"><strong>Payment ID</strong></td>
                        <td align="left" bgcolor="#D2C7BA" width="25%" style="padding: 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;"><strong>'.$row['CheckNum'].'</strong></td>
                        </tr>
                        <tr>
                        <td align="left" width="75%" style="padding: 12px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-top: 2px dashed #D2C7BA; border-bottom: 2px dashed #D2C7BA;"><strong>Name</strong></td>
                        <td align="left" width="25%" style="padding: 12px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-top: 2px dashed #D2C7BA; border-bottom: 2px dashed #D2C7BA;"><strong>'. $firstname.' '.$lastname.'</strong></td>
                        </tr>
                        <tr>
                        <td align="left" width="75%" style="padding: 12px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-top: 2px dashed #D2C7BA; border-bottom: 2px dashed #D2C7BA;"><strong>Delivery Address</strong></td>
                        <td align="left" width="25%" style="padding: 12px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-top: 2px dashed #D2C7BA; border-bottom: 2px dashed #D2C7BA;"><strong>'. $address.', '.$postal.' '.$city.' ,'. $state.' ,'.$country.'</strong></td>
                        </tr>
                        <tr>
                        <td align="left" width="75%" style="padding: 12px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-top: 2px dashed #D2C7BA; border-bottom: 2px dashed #D2C7BA;"><strong>Phone Number</strong></td>
                        <td align="left" width="25%" style="padding: 12px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-top: 2px dashed #D2C7BA; border-bottom: 2px dashed #D2C7BA;"><strong>'.'+6'. $phone.'</strong></td>
                        </tr>
                        <tr>
                        <td align="left" width="75%" style="padding: 12px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-top: 2px dashed #D2C7BA; border-bottom: 2px dashed #D2C7BA;"><strong>Total</strong></td>
                        <td align="left" width="25%" style="padding: 12px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-top: 2px dashed #D2C7BA; border-bottom: 2px dashed #D2C7BA;"><strong>RM'.$row['Amount'].'</strong></td>
                        </tr>
                    </table>
                    </td>
                </tr>
                </table>
            </td>
            </tr>
        </table>
        ';
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        mysqli_close($conn);
        header("Location: main-menu.php");
    }
ob_end_flush();
?>