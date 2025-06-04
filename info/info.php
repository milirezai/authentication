<?php
session_start();
include ('classes/autoload.php');

$email= $_SESSION['email'];
  $info= new model();
$information= $info->find($email);
 