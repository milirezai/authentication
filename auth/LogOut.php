<?php
session_start();

$logOutUser=new User();
$logOutUser->logout();
