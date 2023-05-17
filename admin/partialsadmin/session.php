<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// in order to restrict people to reach admin index page to make changes in the application.
if(!isset($_SESSION['emailadmin']) AND !isset($_SESSION['passwordadmin']))
{
    header('location:adminlogin.php');
}
?> 