<?php
class db 
{
    public function connect()
    {
        $hostname = "localhost";
        $db_name = "database";
        $username = "root";
        $password = "";
   
    try {
        $dsn = "mysql:host=$hostname;dbname=$db_name";
        $connect = new PDO($dsn,$username,$password);
        $connect->setAttribute(attribute:PDO::ATTR_ERRMODE, value:PDO::ERRMODE_EXCEPTION);
        // echo "thành công";
        return $connect;
        
    } catch (PDOException $e) {
       echo "kết nối thất bại :" .$e->getMessage();
    }
}
}