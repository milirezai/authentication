<?php
  trait Query
{
    # find
    public function find($email)
    {
            $query= "SELECT * FROM `users` WHERE `email`=?";
            $stmt=DBConnection::DBConnection()->prepare($query);
            $stmt->execute([$email]);
            $result=$stmt->fetch(\PDO::FETCH_OBJ);
            return $result ;
     }
     protected function insert($userName,$email,$mobileNumber,$password)
     {
         $query="INSERT INTO `users` ( `userName`, `email`, `mobileNumber`,`password`) VALUES ( ?, ?, ?, ? )";
         $stmt=DBConnection::DBConnection()->prepare($query);
         $stmt->execute([$userName,$email,$mobileNumber,$password]);
         return $stmt->rowCount();
     }
}