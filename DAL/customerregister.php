<?php

if (isset($_POST['register'])) {
 //code for google's recaptcha.
  $secretkey = "6LfMLEIaAAAAAJcUsBUtSGM4XfKCp88bYu8AIEn9";
  $response = $_POST['g-recaptcha-response'];
  $userIP = $_SERVER['REMOTE_ADDR'];
  $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$userIP";
  $response = file_get_contents($url);
  $response = json_decode($response);

  if ($response->success) {  //if captcha is success

    include("connection.php");

    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordverify = $_POST['passwordverify'];
    $encrypted = password_hash($password, PASSWORD_DEFAULT);
 //Prevent sql injection and check if the user is present in the database
    $con2= Database::getInstance()->getConnection();
    $email=mysqli_real_escape_string($con2,$email);
    $query2="SELECT * FROM customers WHERE email='$email'";
    $result=mysqli_query($con2,$query2);

    //if not create new credentials and put it in the database.
    if(mysqli_num_rows($result)==0){
    if ($password == $passwordverify) {

      $con = Database::getInstance()->getConnection();
      $encrypted=mysqli_real_escape_string($con,$encrypted);
      $query = "INSERT INTO customers(email,password) VALUES('$email','$encrypted')";
      $con->query($query);

      echo "<script> alert('User registered');
      window.location.href='../customerforms.php';
      </script>";
    } else {
      echo "<script> alert('Passwords did not match!');
      window.location.href='../customerforms.php';
      </script>";
    }
  }
  else{
    echo "<script> alert('Email is present in the database!');
      window.location.href='../customerforms.php';
      </script>";
  }
  } else {
    echo "<script> alert('Captcha failed');
      window.location.href='../customerforms.php';
      </script>";
  }
}

?>