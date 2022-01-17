<?php
//class db chứa các biến và cú pháp để kết nối đến database phpmyadmin
class db {
    public function connect() {
        $hostname = 'localhost';
        $db_name = 'demo_pd0';
        $username = 'root';
        $password = '';
        $dsn = "mysql:host=$hostname; dbname=$db_name";

        try {
            $connect = new PDO($dsn, $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $connect;
        } catch (PDOException $e) {
            echo 'Kết nối thất bại: ' . $e->getMessage();
        }
    }
}