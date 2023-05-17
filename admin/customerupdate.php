<!DOCTYPE html>
<html>
<?php
include("partialsadmin/adminhead.php");
include("partialsadmin/session.php"); //Checks if the user is logged in
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
                    Update Customers
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Customer Update</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <form role="form" action="customerupdatedata.php" method="post">
                        <?php
                        //Gets the selected customer from the database to put the info to text boxes.
                        $newid = $_GET['up_id']; //Directly comes from db doesnt need real escape.
                        include("../DAL/connection.php");
                        $query = "SELECT * FROM customers  WHERE id='$newid'";
                        $con =  Database::getInstance()->getConnection();
                        $results = mysqli_query($con, $query);
                        $row = $results->fetch_assoc();
                        ?>
                        <input type="hidden" value="<?php echo $row['id'] ?>" name="form_id">


                        <div class="box-body">
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="text" class="form-control" id="idemail" placeholder="Enter  Email" value="<?php echo $row['email'] ?>" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="idpassword" placeholder="Enter price" value="<?php echo $row['password'] ?>" name="password">
                            </div>
                        </div>



                        <div class="box-footer">

                            <button type="submit" class="btn btn-primary" name='update'>Update Customer</button>
                        </div>
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