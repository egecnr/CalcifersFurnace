<?php
//entering a new category to the database
 include("connection.php");
 $category=$_POST['categoryName'];

$connect= Database::getInstance()->getConnection();
$category = mysqli_real_escape_string($connect,$category);
$query="INSERT INTO categories(name) VALUES ('$category')";
mysqli_query($connect,$query);

echo "<script> alert('New Category entered');
window.location.href='../admin/adminIndex.php';
</script>";

?>