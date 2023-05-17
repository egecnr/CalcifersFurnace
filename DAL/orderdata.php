<?php
session_start();
include("connection.php");
$total=$_POST['total'];
$customerid= $_SESSION['customerId'];

    //Enters the concluded order in the database
    //This part doesn't need injection since it values are not inputted by users.
    $query="INSERT INTO orders(customerId,total) VALUES ('$customerid','$total')";
    $con = Database::getInstance()->getConnection();
    $con -> query($query);

    echo "<script> alert('ORDER IS FINALIZED AND PAID')
    
    window.location.href='../index.php'
    
    </script>";

    //After the transaction, clear the cart session.
    unset($_SESSION['cart']);


?>

