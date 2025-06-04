<?php
class model{
    protected $database;
  
  
    public function __construct()
    {
        try {
            $this->database=new PDO("mysql:dbname=authentication;host=localhost",'root','');
              } catch (PDOException $e) {
            echo $e->getMessage();
        }
         
    }

    public function create($userName,$email,$mobileNumber,$password){
         $query= "insert into `users` set userName= :userName, email= :email, mobileNumber= :mobileNumber, password= :password";
        $stmt= $this->database->prepare($query);
        $stmt->execute([':userName'=>$userName,':email'=>$email,':mobileNumber'=>$mobileNumber,':password'=>$password]);
         return $stmt->rowCount(); 
             }

      public function find($email){
        $query= "select * from `users` where  email= :email";
        $stmt= $this->database->prepare($query);
        $stmt->execute([':email'=>$email]);
         return $stmt->fetch(PDO::FETCH_OBJ); 
      }
  }
 
  