<?php
include("../DAL/connection.php");


if (isset($_POST['update'])) {
    $newid=$_POST['form_id'];
    $newemail = $_POST['email'];
    $newpassword = $_POST['password'];
    $hashedpassword= password_hash($newpassword,PASSWORD_DEFAULT); //encrypting the password

    // for checking if the email is present in the database
    $query2="SELECT * FROM customers WHERE email='$newemail'";
    $con2= Database::getInstance()->getConnection();
    $result=mysqli_query($con2,$query2);

    if(mysqli_num_rows($result)==0){
        $con = Database::getInstance()->getConnection();
        //Preventing sql injection.
        $newemail=mysqli_real_escape_string($con,$newemail);
        $hashedpassword=mysqli_real_escape_string($con,$hashedpassword);
        $newid=mysqli_real_escape_string($con,$newid);
        //changing credentials and navigating to the next page.
    $query = "UPDATE customers SET email='$newemail', password='$hashedpassword' WHERE id='$newid'";
    if (mysqli_query($con, $query)) {
        header('location: showcustomers.php');
    } else {
        header('location: adminIndex.php');
    }
}
else{
    echo "<script> alert('Email is present in the database!');
      window.location.href='showcustomers.php';
      </script>";
   }
}  
?>
