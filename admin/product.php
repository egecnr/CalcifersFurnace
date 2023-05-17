<!DOCTYPE html>
<html>
  <?php
    include("partialsadmin/adminhead.php");
    include("partialsadmin/session.php");
  ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
 include("partialsadmin/adminheader.php");
 include("partialsadmin/adminaside.php");
?>
  <!-- Left side column. contains the logo and sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Products</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Products</li>
      </ol>
    </section>

    <!-- Main content: Product fill form --> 
    <section class="content">
    <div class="row">
    <form role="form" action="../DAL/productdata.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="pname" placeholder="Enter  name" name="name">
                </div>
              </div>
              <div class="form-group">
                  <label for="productprice">Price</label>
                  <input type="text" class="form-control" id="pprice" placeholder="Enter price" name="productprice">
                </div>
                <div class="form-group">
                  <label for="picture">Choose a picture</label>
                  <input type="file" id="picture" name ="file">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                 <textarea id="description" class="form-control" rows="10" placeholder="Enter description" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="categoryselection">Category</label>
                    <select id="categoryselection" name="categoryselection">
                    <?php
                    //Getting the categories to display in a drop down menu
                    include("../DAL/connection.php");
                    $query="SELECT * FROM categories";
                    $con= Database::getInstance()->getConnection();
                    $results= mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($results)){                   
                     echo "<option value=".$row['id'].">".$row['name']."</option>";
                    }
                    ?>
                    </select>
                </div>
              </div>
              
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add product</button>
              </div>
            </form>


    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
    include("partialsadmin/adminfooter.php");
 ?>
</body>
</html>
