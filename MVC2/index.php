<?php
include 'db.php';
include 'controller/customerController.php';
//tạo đối tượng từ lớp CustomerController
$controller = new CustomerController();
//gọi đến phương thức index() từ lớp CustomerController để tiến hành xử lý các thao tác thêm, sửa, xoá....
$controller->index();