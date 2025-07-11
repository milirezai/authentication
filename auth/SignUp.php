<?php
include "../classes/Autoload.php";

$newUser=new User();
$userName=$_POST['userName'];
$email=$_POST['email'];
$mobileNumber=$_POST['mobileNumber'];
$password=$_POST['password'];
$userExists=$newUser->find($email);
if ($userExists == false )
{
    $signUp=$newUser->register($userName,$email,$mobileNumber,$password);
if ($signUp==1)
{
    session_start();
    $_SESSION['email'] =$email;
    header("location: http://localhost/authentication/panel.php");
}
else
{
    header("location: http://localhost/authentication/index.php");
}

}
else
{
    header("location: http://localhost/authentication/index.php");
}

