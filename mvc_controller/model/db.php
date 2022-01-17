<?php

namespace Model;

use PDO;
use PDOException;

class db
{
    public function connect()
    {
        $hostname = "localhost";
        $db_name = "database";
        $username = 'root';
        $password = "";
        $dsn = "mysql:host=$hostname;dbname=$db_name";


        try {
            $connect = new PDO($dsn, $username, $password);
            $connect->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
            // echo "thành công";
            return $connect;
        } catch (PDOException $e) {
            echo "Kết nối thất bại :" . $e->getMessage();
        }
    }
}
