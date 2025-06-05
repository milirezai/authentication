<?php
class validation{
 private $validation;

    public function validUserName($userName){
if (!empty($userName)) {

    if (is_string($userName)) {

        if (strlen($userName) > 2) {
            return $this->validation=true;
           }else {
            return $this->validation=false;
           }

    } else {
        return $this->validation=false;
       }


 }else {
    return $this->validation=false;
 }
    }

    public function validEmail($email){
        if (!empty($email)) {

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return   $this->validation=true;
                } else {
                  return  $this->validation=false;
                }
      
        }else {
           return $this->validation=false;
         }
        
    }

    public function validMObileNumber($mobileNumber){
        if (!empty($mobileNumber)) {

            if (is_numeric($mobileNumber)) {

                if (  strlen($mobileNumber) == 11 ) {
                    return  $this->validation=true;
                  }elseif (strlen($mobileNumber) > 11) {
                    return  $this->validation=false;
                  }else {
                    return  $this->validation=false;
                  }

             } else {
                return  $this->validation=false;
              }
    
        }else {
           return $this->validation=false;
         }
        
    }

    public function validPassword($password){
        if (!empty($password)) {
            if (strlen($password) >= 8) {
                return $this->validation=true;
             }else {
                return $this->validation=false;
              }
        }else {
           return $this->validation=false;
         }
        

    }
}
  