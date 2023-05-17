<?php

 include("connection.php");
 $name=$_POST['name'];
 $price=$_POST['productprice'];
 $description=$_POST['description'];
 $category=$_POST['categoryselection'];

 $target="productImages/";
 $file_path=$target.basename($_FILES['file']['name']);
 $file_name=$_FILES['file']['name'];
 $file_tmp=$_FILES['file']['tmp_name'];
 $file_store="../productImages/".$file_name;

 move_uploaded_file($file_tmp,$file_store);

 //Prevent sql injection and add the product to the database. Only available for admins.
 $connect= Database::getInstance()->getConnection();
 $name=mysqli_real_escape_string($connect,$name);
 $price=mysqli_real_escape_string($connect,$price);
 $description=mysqli_real_escape_string($connect,$description);
 $category=mysqli_real_escape_string($connect,$category);
 $query="INSERT INTO products(name,price,picture,description,categoryId) VALUES ('$name','$price','$file_path','$description','$category')";
 mysqli_query($connect,$query);

 header('location:../admin/showproducts.php');

?>