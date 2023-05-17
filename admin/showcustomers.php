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
        Current Users
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
    
        <div class="col-sm-9">
            <?php
            //Displaying customer list.
                include('../DAL/connection.php');
                $query = "SELECT * FROM customers";
                $con = Database::getInstance()-> getConnection();
                $results= mysqli_query($con,$query);

                while($row=$results->fetch_assoc()){ ?>
                    <a <?php echo $row['id']?>>
                    <h3> <?php echo $row['id'] ?>: <?php echo $row['email'] ?> </h3><br>
                </a>
                <a href="customerupdate.php?up_id=<?php echo $row['id']?>">
                <button>Update</button> </a> 
                <a href="customerdelete.php?del_id=<?php echo $row['id']?>">
                <button style="color:purple">Delete</button> </a> 

                <hr>
                    <?php
                }
            ?>

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
