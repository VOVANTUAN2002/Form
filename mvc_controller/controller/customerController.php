<?php

namespace Controller;

include_once "./model/customerModel.php";

use Model\customerModel;
use PDO;

class customerController
{
    protected $model;

    public function __construct()
    {
        $this->model = new customerModel();
    }
    public function add()
    {

        include_once './view/add.php';
    }
    public function store()
    {
        $db = new customerModel();
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $fullname   = $_REQUEST['fullname'];
            $age      = $_REQUEST['age'];
            $addres   = $_REQUEST['addres'];

            if ($fullname == "") {
                $errors['fullname'] = " Username is required field !";
            }
            if ($age    == "") {
                $errors['age'] = " age is required field !";
            }
            if ($addres == "") {
                $errors['addres'] = " addres is required field !";
            }
            if (count($errors) == 0) {
                //neu  vượt qua hết tất cả các trường 
                $data = $_REQUEST;
                $add = $db->add($data);
                header("location:index.php");
            } else {
                // không vượt qua trường thì ,mình sẽ trả về lại cho cũ
                $_SESSION['errors'] = $errors;
                header("location:index.php?home=add");
            }
        }
    }
    public function edit()
    {
        $id = (isset($_REQUEST["id"])  && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";
       
        $db = new customerModel();
        // $connect = $db->connect();
        // $sql = "SELECT * FROM customers Where id = $id ";
        // $query = $connect->prepare($sql);
        // $query->execute();
        $customer = $db->detail($id);
        include_once './view/edit.php';
    }
    public function update()
    {
        $db = new customerModel();
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $fullname   = $_REQUEST['fullname'];
            $age      = $_REQUEST['age'];
            $addres   = $_REQUEST['addres'];

            if ($fullname == "") {
                $errors['fullname'] = " Username is required field !";
            }
            if ($age    == "") {
                $errors['age'] = " age is required field !";
            }
            if ($addres == "") {
                $errors['addres'] = " addres is required field !";
            }
            if (count($errors) == 0) {
                //neu  vượt qua hết tất cả các trường 
                $data = $_REQUEST;
                $upDate = $db->upDate($data);
                header("location:index.php");
            } else {
                // không vượt qua trường thì ,mình sẽ trả về lại cho cũ
                $_SESSION['errors'] = $errors;
                header("location:index.php?home=edit");
            }
        }
    }
    public function delete()
    {
        
        include_once './view/delete.php';
    }
    public function detail()
    {
        $id = (isset($_REQUEST["id"])  && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";
       
        $db = new customerModel();
        $connect = $db->connect();

        $sql = "SELECT * FROM customers Where id = $id ";
        $query = $connect->prepare($sql);
        $query->execute();
        $customer = $db->detail($id);
        include_once './view/detail.php';
    }


    public function index()
    {
        $db = new customerModel();

        $connect = $db->connect();

        $sql = 'SELECT * FROM customers';

        $query = $connect->prepare($sql);

        $query->execute();

        $customers = array();

        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            array_push($customers, $result);
        }
        include_once './view/list.php';
    }
}
