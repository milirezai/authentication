<?php
include "../classes/Autoload.php";

$logInUser=new User();
$email=$_POST['email'];
$logIn=$logInUser->login($email);
if ($logIn)
{
    session_start();
    $_SESSION['email'] =$email;
    header("location: http://localhost/authentication/panel.php");
}
else
{
    header("location: http://localhost/authentication/index.php");
}