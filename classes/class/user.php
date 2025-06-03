<?php

class user{
    
private $userName;
private $email;
private $mobileNumber;
private $password;

public function setUserName($userName){
    $this->userName=$userName;
}
public function getUserName(){
   return  $this->userName;
}
public function setEmail($email){
    $this->email=$email;
}
public function getEmail(){
   return  $this->email;
}
public function setMobileNumber($mobileNumber){
    $this->mobileNumber=$mobileNumber;
}
public function getMobileNumber(){
   return  $this->mobileNumber;
}
public function setPassword($password){
    $this->password=$password;
}
public function getPassword(){
   return  $this->password;
}
}
  