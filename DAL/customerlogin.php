<?php
session_start();

//checking out if the login button is pressed.
if (isset($_POST['login'])) {


    include("connection.php");
    
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordEncrypt = password_hash($password, PASSWORD_DEFAULT);

    $con = Database::getInstance()->getConnection();
   //preventing sql injection and checking out if the user is present in the database
    $email=mysqli_real_escape_string($con,$email);
    $query = "SELECT * FROM  customers WHERE email='$email'";
    $result = $con->query($query);
    $row = $result->fetch_assoc();
    
    if ($row !=null) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['customerId'] = $row['id'];
    }
    
//if the user present (row exists) check out if the passwords matches and login according to conclusion.
  if(isset($row['email']) AND isset($row['password'])){

  
    if ($email == $row['email'] AND password_verify($password, $row['password'])) {
        header('location: ../index.php');
    }
    else {
        session_destroy();
        echo "<script> alert('Username or Password invalid!');
        window.location.href='../customerforms.php';
        </script>";
    }
}else {
    session_destroy();
    echo "<script> alert('Username or Password invalid!');
    window.location.href='../customerforms.php';
    </script>";
}

}


?>