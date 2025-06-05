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
    public function login($email){
      $login=new model();
      $info=$login->find($email);  
      session_start();
       $_SESSION['email'] = $_POST['email'];
        if ($info->email==$email) {
          header("location: http://localhost/authentication/userPanel.php");
       }else {
          header("location: http://localhost/authentication");
       }  
    }
    public function logout(){ 
      if (isset($_GET['logout'])) {
          session_unset();
          header("location:http://localhost/authentication/");
      }
  }

    
}