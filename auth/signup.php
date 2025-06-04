<?php
 include ('../classes/autoload.php');
 $register= new auth();

if (isset($_POST['register'])) {
    $register->register($_POST['userName'],$_POST['email'],$_POST['mobileNumber'],$_POST['password']);
    session_start();
    $_SESSION['userName'] = $_POST['userName'];
    $_SESSION['email'] = $_POST['email'];
  header("location: http://localhost/authentication/userPanel.php");
}