<?php
 session_start();
 include "classes/Autoload.php";
 $email=$_SESSION['email'];
 $infoUser=new User();
 $info=$infoUser->find($email);
