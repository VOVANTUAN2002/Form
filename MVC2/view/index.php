<?php
include_once 'db.php';

$db = new db();                     //khởi tạo đối tượng từ class db ở db.php
$connect = $db->connect();          //kết nối đến cơ sở dữ liệu
$sql = "SELECT * FROM customer";    //lưu cú pháp vào biến sql
$query = $connect->prepare($sql);   //chuẩn bị
$query->execute();                  //thực hiện cú pháp
$customers = array();               //khởi tạo mảng customers

//trả về một số dữ liệu dưới dạng đối tượng
while ($result = $query->fetch(PDO::FETCH_OBJ)) {
    array_push($customers, $result);    //thêm giá trị $result vào mảng $customers -> đọc tiếp hàng 44
}

?>
<!doctype html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>QLKH</title>
</head>

<body>
<div class="container">
    <h1 style="text-align: center">Danh sách khách hàng</h1>
    <a href="index.php?action=add" class="btn btn-primary">Thêm mới</a>
    <table class="table table-border">
        <thead>
            <tr>
                <td>Họ và tên</td>
                <td>Tuổi</td>
                <td>Địa chỉ</td>
                <td>Chức năng</td>
            </tr>
        </thead>
        <tbody>
            <!-- từ mảng customers phía trên, tiến hành foreach để in dữ liệu ra bảng danh sách  -->
            <?php
            foreach ($customers as $customer) :
            ?>
                <tr>
                    <td><?php echo $customer->fullname ?></td>
                    <td><?php echo $customer->age ?></td>
                    <td><?php echo $customer->address ?></td>
                    <td><a href="index.php?action=detail&id=<?php echo $customer->id ?>" class="btn btn-primary">Xem chi tiết</a></td>
                    <td><a href="index.php?action=edit&id=<?php echo $customer->id ?>" class="btn btn-primary">Sửa</a></td>
                    <td><a href="index.php?action=delete&id=<?php echo $customer->id ?>" class="btn btn-danger" onclick="return confirm('Bạn tự tin với quyết định của mình?');">Xóa</a></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
</body>

</html>