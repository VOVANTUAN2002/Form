<?php 
namespace Controller;
include_once "./model/ProductsModel.php";
use Model\ProductsModel;
class HomeController
{
    // protected $model;
    protected $productModel;

    public function __construct()
    {
        // $this->model = new customerModel();
        $this->productModel = new ProductsModel();
    }

 public function home()
 {
   $products = $this->productModel->getList();
   include_once "./view/layout/home/app.php";
 }
}
