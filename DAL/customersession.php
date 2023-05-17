<?php
//check if the customer is logged in or not
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(!isset($_SESSION['email']) AND !isset($_SESSION['password'])){    
   
        echo "<script> alert ('Please login first before checking out')
        window.location.href='customerforms.php';
        </script>";
    
}
?>