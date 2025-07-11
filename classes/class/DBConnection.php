<?php
 use PDOException;
 class DBConnection
{
    private static $dbConnection=null;
    private function __construct()
    {
    }
    public static function DBConnection()
    {
        if (self::$dbConnection == null)
        {
            $DB=new DBConnection();
            self::$dbConnection=$DB->ConnectDB();
        }
        return self::$dbConnection;
    }
    public static function ConnectDB()
    {
        try
        {
            $pdo= new PDO("mysql:host=localhost;dbname=authentication","root","");
            return $pdo;
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}