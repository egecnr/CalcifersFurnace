<?php
include("../DAL/connection.php");
session_start();


if (isset($_POST['register'])) {
 
    //This code is for editing the credentials of users as a user.
    $newid= $_SESSION['customerId']; //Directly comes from database when user logs in, no reason to use escape string method.
    $newemail = $_POST['email'];
    $newpassword = $_POST['password'];
    $hashedpassword= password_hash($newpassword,PASSWORD_DEFAULT);

    
    $query2="SELECT * FROM customers WHERE email='$newemail'";
    $con2= Database::getInstance()->getConnection();
    $newemail= mysqli_real_escape_string($con2,$newemail);
    $hashedpassword= mysqli_real_escape_string($con2,$hashedpassword);
    $result=mysqli_query($con2,$query2);

    // if the email is the same with users current email he/she still should be able to change the password
    if(mysqli_num_rows($result)==0 || $newemail==$_SESSION['email']){
    $con = Database::getInstance()->getConnection();

    $query = "UPDATE customers SET email='$newemail', password='$hashedpassword' WHERE id='$newid'";
    if (mysqli_query($con, $query)) {
        echo "<script> alert('Credentials have been updated');
       window.location.href='../index.php';
       </script>";
    } else {
         echo "<script> alert('Query failed');
         window.location.href='../index.php';
         </script>";
    }
}
else{
    echo "<script> alert('Email is present in the database! Please pick another one');
      window.location.href='../index.php';
      </script>";
   } 
}

?>