<?php

trait Authentication
{
    public function register($userName,$email,$mobileNumber,$password)
    {
        $valid=new Validation();
        $validation=$valid->valid([$userName,$email,$mobileNumber,$password]);
        if ($validation)
        {
            $result=$this->insert($userName,$email,$mobileNumber,$password);
            return $result;
        }
        else
        {
            return "invalid data";
        }
    }
    public function login($email)
    {
        $info=$this->find($email);
        if ($info->email==$email)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function logout()
    {
        if (isset($_GET['logout']))
        {
            session_unset();
            header("location: http://localhost/authentication/index.php");
        }
    }
}