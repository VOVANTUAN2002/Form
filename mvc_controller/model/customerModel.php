<?php

namespace Model;

include_once 'db.php';

use PDO;
use PDOException;

class customerModel extends db
{
    protected $connect;

    public function __construct()
    {
        $this->connect = $this->connect();
    }

    public function getList()
    {
        $sql = 'SELECT * FROM customers';

        $query = $this->connect->prepare($sql);

        $query->execute();

        $customers = array();

        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            array_push($customers, $result);
        }
        return $customers;
    }

    public function add($data)
    {
        $sql = "INSERT INTO customers(fullname,age,addres) VALUES ('" . $data['fullname'] . "','" . $data['age'] . "','" . $data['addres'] . "')";
        $this->connect->exec($sql);
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM customers WHERE id= '" . $id . "' ";
        $query = $this->connect->prepare($sql);
        $query->execute();

        $customer = array();

        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            $customer = $result;
        }
        return $customer;
    }

    public function detail($id)
    {
        $db = new db();
        $connect = $db->connect();

        $sql = "SELECT * FROM customers WHERE id = '" . $id . "' ";
        $query = $this->connect->prepare($sql);
        $query->execute();
        $customer = array();

        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            $customer = $result;
        }
        return $customer;
    }

    public function upDate($data)
    {
        $sql = "UPDATE customers SET fullname =  '" . $data['fullname'] . "',
        age  = '" . $data['age'] . "',
        addres = '" . $data['addres'] . "' 
        WHERE id = '" . $data['id'] . "'";
        $this->connect->exec($sql);
    }

    public function delete()
    {
        $sql = "DELETE FROM customers WHERE  id  = '" . $_GET['id'] . "' ";
        $this->connect->exec($sql);
    }
}