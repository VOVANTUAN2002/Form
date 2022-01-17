<?php
session_start();
include_once "./Controller/productsController.php";
include_once "./Controller/HomeController.php";
// include_once './view/layout/header.php';

use Controller\ProductsModel;
use Controller\HomeController;
// $controller = new ProductsModel();
$controllerHomeController = new HomeController();
// $controller->index();
$home = (isset($_REQUEST["home"])  && !empty($_REQUEST["home"])) ? $_REQUEST["home"] : "";

switch ($home) {
    case "index":
        $productModel->index();
        break;
    case "add":
        $productModel->add();
        break;
    case "edit":
        $productModel->edit();
        break;
    case "update":
        $productModel->update();
        break;
    case "delete":
        $productModel->delete();
        break;
    case "detail":
        $productModel->detail();
        break;
    case "store":
        $productModel->store();
        break;
        case "home":
            include_once "./view/layout/layouttrangchu/header.php";
            $controllerHomeController->home();
            include_once "./view/layout/layouttrangchu/footer.php";
            break;
    default:
        // $product->index();
        break;      
}

?>
<?php
include_once './view/layout/footer.php';

?>