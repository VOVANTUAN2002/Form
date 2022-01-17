<?php

namespace Controller;

include_once "./model/ProductsModel.php";

use Model\ProductsModel;

class ProductsController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductsModel();
    }
    public function index()
    {
        // echo __METHOD__;
        $db = new ProductsModel();
        $product = $db->getlist();
        include_once './view/list.php';
    }

    public function add()
    {
        // echo __METHOD__;
        include_once './view/add.php';
    }
    public function edit()
    
    {
        // echo __METHOD__;
        $id = (isset($_REQUEST["id"])  && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";
        $db = new ProductsModel();
        $product = $db->edit($id);
        include_once './view/edit.php';
    }
    public function delete()
    {
        // echo __METHOD__;
        $id = (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) ? ($_REQUEST['id']) : "";
        $db = new ProductsModel();
        $product = $db->delete($id);
        header("location:index.php");
    }
    public function detail()
    {
        // echo __METHOD__;
        $id = (isset($_REQUEST["id"])  && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";
        $db = new ProductsModel();
        $connect = $db->connect();
        $product = $db->detail($id);
        include_once './view/detail.php';
    }
    public function update()
    {
        $db = new ProductsModel();
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $tensanpham   = $_REQUEST['tensanpham'];
            $giasanpham      = $_REQUEST['giasanpham'];
            $anh   = $_REQUEST['anh'];

            if ($tensanpham == "") {
                $errors['tensanpham'] = " tên san pham is required field !";
            }
            if ($giasanpham    == "") {
                $errors['giasanpham'] = " giasanpham is required field !";
            }
            if ($anh == "") {
                $errors['anh'] = " anh is required field !";
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
    public function store()
    {
        $db = new ProductsModel();
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $tensanpham   = $_REQUEST['tensanpham'];
            $giasanpham      = $_REQUEST['giasanpham'];
            $anh   = $_REQUEST['anh'];

            if ($tensanpham == "") {
                $errors['tensanpham'] = " tên san pham is required field !";
            }
            if ($giasanpham    == "") {
                $errors['giasanpham'] = " giasanpham is required field !";
            }
            if ($anh == "") {
                $errors['anh'] = " anh is required field !";
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
}
