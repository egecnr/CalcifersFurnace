<?php
 include('../DAL/connection.php');
 
 $newid=$_GET['del_id']; //Directly comes from database, therefore doesn't need real escape.

 //Deletes the customer from the database.
 $query= "DELETE FROM customers WHERE id='$newid'";
 $con = Database::getInstance()->getConnection();

 if(mysqli_query($con,$query)){
    header('location: ../admin/showcustomers.php');
 }
 else {
    echo('not deleted');
 }


?>