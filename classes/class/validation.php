<?php
class validation{
 private $validation;

    public function validUserName($userName){
if (!empty($userName)) {

    if (is_string($userName)) {

        if (strlen($userName) > 2) {
            return $this->validation=true;
            // return "نام اوکی است";
          }else {
            return $this->validation=false;
            // return "طول نام کوتاه است";
          }

    } else {
        return $this->validation=false;
        // return "نوع نام رشته نیست";
      }


 }else {
    return $this->validation=false;
    // return "نام خالی است !";
}
    }

    public function validEmail($email){
        if (!empty($email)) {

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return   $this->validation=true;
                // return   "ایمیل اوکی است";
               } else {
                  return  $this->validation=false;
                //   return  "ایمیل نا معتبر است";
               }
      
        }else {
           return $this->validation=false;
        //    return "ایمیل خالی است";
        }
        
    }

    public function validMObileNumber($mobileNumber){
        if (!empty($mobileNumber)) {

            if (is_numeric($mobileNumber)) {

                if (  strlen($mobileNumber) == 11 ) {
                    return  $this->validation=true;
                    // return  "موبایل اوکی است";
                 }elseif (strlen($mobileNumber) > 11) {
                    return  $this->validation=false;
                    // return  "تعداد عدد های موبایل بیشتر است";
                 }else {
                    return  $this->validation=false;
                    // return  "تعداد عدد های موبایل کم است";
                 }

             } else {
                return  $this->validation=false;
                // return "فرمت موبایل عددی نیست";
             }
    
        }else {
           return $this->validation=false;
        //    return "موبایل خالی است";
        }
        
    }

    public function validPassword($password){
        if (!empty($password)) {
            if (strlen($password) >= 8) {
                return $this->validation=true;
                // return "پسورد اوکی است";
            }else {
                return $this->validation=false;
                // return "طول پسورد کم تر از ۸ است";
             }
        }else {
           return $this->validation=false;
        //    return "پسورد خالی است";
        }
        

    }
}
  