<?php
class auth{
    public function register($suerName,$email,$mobileNumber,$password){
  $valid= new validation();
 if ($valid->validUserName($suerName)&&$valid->validEmail($email)&&$valid->validMObileNumber($mobileNumber)&&$valid->validPassword($password)) {
    $user= new user($suerName,$email,$mobileNumber,$password);
    $register=new model();
    print_r($register->create($user->getUserName(),$user->getEmail(),$user->getMobileNumber(),$user->getPassword()));
  }else {
    echo "error";
  }
    }
}