<?php

class Validation
{
    public function valid(array $data)
    {
        if ($this->validUserName($data[0]) and $this->validEmail($data[1]) and $this->validMobileNumber($data[2]) and $this->validPassword($data[3]))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function validUserName($userName)
    {
        if (!empty($userName))
        {
            if (is_string($userName))
            {
                if (strlen($userName) > 2)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    public function validEmail($email)
    {
        if (!empty($email))
        {
            if (filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    public function validMobileNumber($mobileNumber)
    {
        if (!empty($mobileNumber))
        {
            if (is_numeric($mobileNumber))
            {
                if (strlen($mobileNumber)==11)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    public function validPassword($password)
    {
        if (!empty($password))
        {
            if (strlen($password) <= 8)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
}