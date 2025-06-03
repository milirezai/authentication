<?php

class user{
    
private $userName;
private $email;
private $mobileNumber;
private $password;

public function __construct($userName,$email,$mobileNumber,$password)
{
    $this->userName=$userName;
    $this->email=$email;
    $this->mobileNumber=$mobileNumber;
    $this->password=$password;
}

 public function getUserName(){
   return   $this->userName;
}
 public function getEmail(){
   return  $this->email;
}
 public function getMobileNumber(){
   return  $this->mobileNumber;
}
 public function getPassword(){
   return  $this->password;
}
}
 