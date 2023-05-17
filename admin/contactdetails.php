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
        Contact information
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-sm-9">
            <?php
            //Gets the contact messages from the database to display it.
                include('../DAL/connection.php');
                $con = Database::getInstance()-> getConnection();
                $id=$_GET['show_id']; //This doesn't need real escape method since it directly comes from the database
                $query = "SELECT * FROM contact WHERE id='$id'";
                $results= mysqli_query($con,$query);
                $row= $results-> fetch_assoc();
            ?>

            <h3> Email: <?php echo $row['email']?> </h3> <hr> <br>

            <p> Message: <?php echo $row['message']?> </p> <hr> <br>

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
