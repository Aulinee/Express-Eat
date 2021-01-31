<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: /ExpressEat/index.php");
   }
?>