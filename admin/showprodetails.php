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
        Product information
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-sm-9">
            <?php
            //displaying products in a detailed way.
                include('../DAL/connection.php');
                $con = Database::getInstance()-> getConnection();
                $id=$_GET['pro_id'];
                $query = "SELECT * FROM products WHERE id='$id'";
                $results= mysqli_query($con,$query);
                $row= $results-> fetch_assoc();
            ?>

            <h3> Name: <?php echo $row['name']?> </h3> <hr> <br>

            <h3> Price: <?php echo $row['price']?> </h3> <hr> <br>

            <h3> Description: <?php echo $row['description']?> </h3> <hr> <br>
            <img src="../<?php echo $row['picture']?>" alt="No file" style="height:300px; width:300px">

        </div>
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
