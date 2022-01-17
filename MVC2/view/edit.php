<?php
include_once 'header.html';
include_once 'db.php';

$db = new db();
$connect = $db->connect();

?>
<div class="col-12 col-md-12">
        <div class="col-12">
            <h1 style="text-align: center;">Cập nhật thông tin khách hàng</h1>
        </div>
<div class="container">
<form method="post">
    <input class="form-control" name = "id" type="hidden" value="<?php echo $customer->id ?>">
    <div>
        <p>Họ và tên</p>
        <input class="form-control" name="fullname" value ="<?php echo $customer->fullname ?>">
    </div>
    <div>
        <p>Tuổi</p>
        <input class="form-control" name="age" value ="<?php echo $customer->age; ?>">
    </div>
    <div>
        <p>Địa chỉ</p>
        <input class="form-control" name="address" value ="<?php echo $customer->address; ?>">
    </div><br>
    <div>
        <input type="submit" value="Update" class="btn btn-primary" />
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>
</div>