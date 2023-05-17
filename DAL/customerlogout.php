<?php
session_start();
//Since there are more session variables like cart data I don't want to destroy the session.
//Therefore I will simply delete the values of email and password.
unset($_SESSION['email']);
unset($_SESSION['password']);
header('location:../index.php');
?>