<?php
class model{
    protected $database;
    // protected $tableName='users';

  
    public function __construct()
    {
        try {
            $this->database=new PDO("mysql:dbname=authentication;host=localhost",'root','');
          } catch (PDOException $e) {
            echo $e->getMessage();
        }
         
    }

    public function create($tableName,$userName,$email,$mobileNumber,$password){
         $query= "insert into {$tableName} set userName= :userName, email= :email, mobileNumber= :mobileNumber, password= :password";
        $stmt= $this->database->prepare($query);
        $stmt->execute([':userName'=>$userName,':email'=>$email,':mobileNumber'=>$mobileNumber,':password'=>$password]);
         return $stmt->rowCount();
      }

      public function find($tableName,$email,$password){
        $query= "select * from {$tableName} where email= :email and password= :password";
        $stmt= $this->database->prepare($query);
        $stmt->execute([':email'=>$email, ':password'=>$password]);
         return $stmt->fetch(PDO::FETCH_OBJ); 
      }
 }
 