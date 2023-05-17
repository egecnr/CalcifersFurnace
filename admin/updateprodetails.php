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
          Update Product
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <form role="form" action="productupdatedata.php" method="post" enctype="multipart/form-data">
            <?php
            //getting  the product from the database with the specific id for update.
            $newid = $_GET['up_id']; // Directly comes from the database, doesn't need injection protection.
            include("../DAL/connection.php");
            $query = "SELECT * FROM products  WHERE id='$newid'";
            $con =  Database::getInstance()->getConnection();
            $results = mysqli_query($con, $query);
            $row = $results->fetch_assoc();
         
           


            ?>
              <input type="hidden" value="<?php echo $row['id'] ?>" name="form_id">


            <div class="box-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="pname" placeholder="Enter  name" value="<?php echo $row['name'] ?>" name="name">
              </div>
            </div>
            <div class="form-group">
              <label for="productprice">Price</label>
              <input type="text" class="form-control" id="pprice" placeholder="Enter price" value="<?php echo $row['price'] ?>" name="productprice">
            </div>
            <div class="form-group">
              <label for="picture">Choose a picture</label>
              <input type="file" id="picture" name="file" value="<?php echo $row['picture'] ?>">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea id="description" class="form-control" rows="10" placeholder="Enter description" value="<?php echo $row['description'] ?>" name="description"></textarea>
            </div>
            <div class="form-group">
              <label for="categoryselection">Category</label>
              <select id="categoryselection" value="<?php echo $row['categoryId'] ?>" name="categoryselection">
                <?php
                //Displaying the categories in a dropdown menu
                $query = "SELECT * FROM categories";
                $con = Database::getInstance()->getConnection();
                $results = mysqli_query($con, $query);
                while ($row = mysqli_fetch_assoc($results)) {
                  echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
                }
                ?>
              </select>
            </div>
            <div class="box-footer">

              <button type="submit" class="btn btn-primary" name='update'>Update product</button>
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