<?php
class validation{
    public $validUserName;
    public $validEmail;
    public $validMObileNumber;
    public $validPassword;

    public function validUserName($userName){

        if (is_string($userName)) {

            if (strlen($userName) > 2) {
                return $this->validUserName=1;
             }else {
                return $this->validUserName=0;
             }

        } else {
            return $this->validUserName=0;
         }

    }

    public function validEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
          return   $this->validEmail=1;
         } else {
            return  $this->validEmail=0;
         }
    }

    public function validMObileNumber($mobileNumber){
        if (is_numeric($mobileNumber)) {
            if (  strlen($mobileNumber) == 11 ) {
                return  $this->validMObileNumber=1;
            }else {
                return  $this->validMObileNumber=0;
            }
            return  $this->validMObileNumber=1;
        } else {
            return  $this->validMObileNumber=0;
        }
    }

    public function validPassword(){

    }
}
$user= new validation();
echo $user->validMObileNumber('09167516826');
  