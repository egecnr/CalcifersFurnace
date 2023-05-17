<?php
include("../DAL/connection.php");


if (isset($_POST['update'])) {
    $newid=$_POST['form_id'];
    $newname = $_POST['name'];
    $newprice = $_POST['productprice'];
    $newdesc = $_POST['description'];
    $newcat = $_POST['categoryselection'];


    //Saving the product to the productImages file.

    $target = "productImages/";
    $file_path = $target . basename($_FILES['file']['name']);
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_store = "../productImages/" . $file_name;

    move_uploaded_file($file_tmp, $file_store);

    //Preventing sql injection and entering the update query for products.
    $con = Database::getInstance()->getConnection();
    $newname= mysqli_real_escape_string($con,$newname);
    $newprice=mysqli_real_escape_string($con,$newprice);
    $newdesc=mysqli_real_escape_string($con,$newdesc);
    $newcat=mysqli_real_escape_string($con,$newcat);
    $query = "UPDATE products SET name='$newname', price='$newprice', description='$newdesc', categoryId='$newcat',picture='$file_path' WHERE id='$newid'";
    if (mysqli_query($con, $query)) {
        header('location: showproducts.php');
    } else {
        header('location: adminIndex.php');
    }
}
?>


