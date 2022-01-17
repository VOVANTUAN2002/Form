<?php
namespace Model;
include_once 'db.php';
use db;
use PDO;

class ProductsModel extends db
{
    protected $connect;

    public function __construct()
    {
        $this->connect = $this->connect();
    }

    public function getList()
    {
        $sql = 'SELECT * FROM products';

        $query = $this->connect->prepare($sql);

        $query->execute();

        $product = array();

        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            array_push($product, $result);
        }
        return $product;
    }

    public function add($data)
    {
        $sql = "INSERT INTO products(tensanpham,giasanpham,anh) VALUES ('" . $data['tensanpham'] . "','" . $data['giasanpham'] . "','" . $data['anh'] . "')";
         $add= $this->connect->exec($sql);
         return $add;
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM products WHERE id= '" . $id . "' ";
        $query = $this->connect->prepare($sql);
        $query->execute();

        $product = array();

        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            $product = $result;
        }
        return $product;
    }

    public function detail($id)
    {
        $db = new db();
        $connect = $db->connect();

        $sql = "SELECT * FROM products WHERE id = '" . $id . "' ";
        $query = $this->connect->prepare($sql);
        $query->execute();
        $product = array();

        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            $product = $result;
        }
        return $product;
    }

    public function upDate($data)
    {
        $sql = "UPDATE products SET tensanpham =  '" . $data['tensanpham'] . "',
        giasanpham  = '" . $data['giasanpham'] . "',
        anh = '" . $data['anh'] . "' 
        WHERE  id = '" . $data['id'] . "'";
        $this->connect->exec($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE  id  = $id ";
        $delete =  $this->connect->exec($sql);
        return $delete;
        header("location:index.php");   
    }
}