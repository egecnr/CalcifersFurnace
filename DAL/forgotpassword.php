<?php
require_once("../libraries/PHPMailer/PHPMailerAutoload.php");
include("connection.php");
$con=Database::getInstance()->getConnection();

//if the email is set which means user is logged in
if(isset($_POST['email'])){
$toEmail= $_POST['email'];
$code=uniqid(true);
$toEmail=mysqli_real_escape_string($con,$toEmail);
$query=mysqli_query($con,"INSERT INTO resetPassword (code,email) VALUES('$code','$toEmail')");
 //insert the code to the database in order to generate a new url and receive the email afterwards
if(!$query){
    echo "<script> alert('Query failed')
    
    window.location.href='../customerforms.php'
    
    </script>";
}
//if user is valid, send the mail via PHPMailer library.
try{
$url="https://emkutuk.com/calcifersfurnace/DAL/resetPassword.php?code=$code";
$mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->isHTML();
        $mail->Username = 'calcifersfurnice@gmail.com';
        $mail->Password = 'calcifersfurnice!!111';
        $mail->SetFrom('no-reply@howcode.org');
        $mail->Subject = "Reset Password";
        $mail->Body = "<h1>Password reset</h1>
                        Please click <a href='$url'> THIS LINK </a> to reset your password.";
        $mail->AddAddress("$toEmail");

$mail->send();
}catch(Exception $e){
    echo $mail->ErrorInfo;
}
echo "<script> alert('Email sent to $toEmail')
    
    window.location.href='../index.php'
    
    </script>";

}



?>