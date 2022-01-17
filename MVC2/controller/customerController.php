<?php
include 'model/customerModel.php';
class customerController
{
    protected $model;
    //construct được chạy trước khi gọi đến customerController
    public function __construct()
    {
        $this->model = new customerModel();
    }
    //kiểm tra dữ liệu được gửi qua phương thức GET ở view/index.php hay chưa
    public function index()
    {
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = '';
        }
        /*kiểm tra action ở phương thức GET là gì? thêm mới(add), chi tiết(detail), chỉnh sửa(edit), xoá(delete)...
        Vì ở các button mình đã đặt ?id=$id(phương thức GET) nên ở các câu lệnh điều kiện chỉ cần kiểm tra
        các biến $id đã được đặt giá trị hay chưa, nếu đã được đặt giá trị thì gọi đến các phương thức 
        để thực hiện các tác vụ như sửa, xoá hay điều hướng phù hợp
        */
        switch ($action) {
            case 'add':
                if (isset($_POST['fullname'])) {
                    $this->model->add($_POST);

                    header("Location: index.php");
                }
                include 'view/add.php';
                break;

            case 'detail':
                if (isset($_GET['id'])) {
                    $customer = $this->model->detail($_GET['id']);
                }
                include 'view/detail.php';
                break;

            case 'edit':
                if (isset($_GET['id'])) {
                    $customer = $this->model->edit($_GET['id']);
                    include 'view/edit.php';
                }
                if (isset($_POST['fullname'])) {
                    $this->model->update($_POST);

                    header("Location: index.php");
                }
                break;

            case 'delete':
                if (isset($_GET['id'])) {
                    $this->model->delete($_GET['id']);

                    header("Location: index.php");
                }

            default:
                $customer = $this->model->getList();
                include 'view/index.php';
        }
    }
}
