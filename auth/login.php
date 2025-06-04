<?php

include ('../classes/autoload.php');

 if (isset($_POST['login'])) {
 $login=new auth();
$login->login($_POST['email']);
 }