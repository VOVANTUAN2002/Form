<?php
include_once 'header.html';
//incluce_once file db để kết nối add.php đến cơ sở dữ liệu
include_once 'db.php';
?>
<div class="col-12 col-md-12">
        <div class="col-12">
            <h1 style="text-align: center;">Thêm mới khách hàng</h1>
        </div>
<div class='container'>
            <form method="post">
                <div class="form-group">
                    <label>Tên khách hàng</label>
                    <input type="text" class="form-control" name="fullname"  placeholder="Nhập tên" required>
                </div>
                <div class="form-group">
                    <label>Tuổi</label>
                    <input type="text" class="form-control" name="age" placeholder="Nhập độ tuổi" required>
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                                                <!-- window.history.go(-1) để trở lại trang trước đó -->
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>

    </div>
</div>