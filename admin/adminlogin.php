<?php
session_start();
include('partialsadmin/adminhead.php'); //PLEASE CHECK README FOR ADMIN CREDENTIALS
include('../DAL/connection.php');  //only works if  user clicked login in previous page.
if (isset($_POST['loginBtn'])) {  
    $email = $_POST['email'];    
    $password = $_POST['password'];
 // checks if the entered email is present in the database
    $con = Database::getInstance()->getConnection();
    $email= mysqli_real_escape_string($con,$email);
    $password= mysqli_real_escape_string($con,$password);
    $query="SELECT * FROM admins where username='$email' AND password='$password'";


    $results=mysqli_query($con,$query);
    $row= $results -> fetch_assoc();
//adds the credentials to a session variable IF there is a present user with the asked credentials in the database.    
        if($row !=null){
            $_SESSION['emailadmin']= $row['username'];
            $_SESSION['passwordadmin']=$row['password'];
        }

//If succesfull go to the admin page ELSE stay in login page.
    if($email=$row['username'] AND $password=$row['password']){
        header('location:adminIndex.php');

    }
    else{
        header('location:adminlogin.php');
    }
}

//Code for login form below.
?>
<div class="row">

    <div class="col-sm-4">

    </div>
  
    <div class="col-sm-4">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Admin Login</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="adminlogin.php" method="POST">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">

                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right" name="loginBtn">Sign in</button>
                </div>
                <!-- /.box-footer -->
            </form>

        </div>

        <div class="col-sm-4">

        </div>
    </div>