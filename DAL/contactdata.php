<?php

//entering a new contact message to the database.
 include("connection.php");
 $email=$_POST['email'];
 $message=$_POST['message'];
$connect= Database::getInstance()->getConnection();
$email =mysqli_real_escape_string($connect,$email);
$message= mysqli_real_escape_string($connect,$message);
 
$query="INSERT INTO contact(email,message) VALUES ('$email','$message')";
mysqli_query($connect,$query);

echo "<script> alert ('Contact form sent')
        window.location.href='../index.php';
        </script>";

?>