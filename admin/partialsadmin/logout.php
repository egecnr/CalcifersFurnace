<?php
//for being able to sign out.
session_start();  //I only unset the email admin and password admin to prevent losing other session variables.
unset($_SESSION['emailadmin']);
unset($_SESSION['passwordadmin']);
header('location:../../index.php');

?>