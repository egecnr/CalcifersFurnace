<!DOCTYPE html>
<html>
  <?php
    include("partialsadmin/adminhead.php");
  ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
//including header and aside bar
 include("partialsadmin/adminheader.php");
 include("partialsadmin/session.php");  //session is for checking out if the user is logged in
 include("partialsadmin/adminaside.php");
?>
  <!-- Left side column. contains the logo and sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
        <small>Control panel</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
    include("partialsadmin/adminfooter.php");
 ?>
</body>
</html>
