<?php 
    date_default_timezone_set("Asia/Kuching");
    $date = date("dmyhis");
    $fourRandomDigit = mt_rand(1000,9999);
    $paymentID = $date.$fourRandomDigit;
?>