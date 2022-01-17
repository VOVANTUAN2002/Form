<?php
session_start();
include_once "controller/customerController.php";
include_once "controller/HomeController.php";

use Controller\CustomerController;
use Controller\HomeController;

$controller = new CustomerController();
$objHomeController = new HomeController();
// $controller->index();
$home = (isset($_REQUEST["home"])  && !empty($_REQUEST["home"])) ? $_REQUEST["home"] : "";

switch ($home) {
    case "index":
        $controller->index();
        break;
    case "add":
        $controller->add();
        break;
    case "edit":
        $controller->edit();
        break;
    case "update":
        $controller->update();
        break;
    case "delete":
        $controller->delete();
        break;
    case "detail":
        $controller->detail();
        break;
    case "home":
        $objHomeController->index();
        break;
    case "store":
        $controller->store();
        break;
    default:
        $controller->index();
        break;      
}
