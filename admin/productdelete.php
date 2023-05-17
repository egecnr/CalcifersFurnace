<?php
 include('../DAL/connection.php');
 
 $newid=$_GET['del_id']; //id comes from the database, no need for real escape method. This id is not inputted by user.
   //for deleting the product
 $query= "DELETE FROM products WHERE id='$newid'";
 $con = Database::getInstance()->getConnection();

 if(mysqli_query($con,$query)){
    header('location: ../admin/showproducts.php');
 }
 else {
    echo('not deleted');
 }


?>