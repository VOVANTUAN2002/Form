<?php
include_once 'header.html';
include_once 'db.php';

?>
        <div class="col-12">
            <h1 style="text-align: center;">Thông tin chi tiết khách hàng</h1>
            <p style="margin-left:100px";><a href="index.php" class="btn btn-primary">Quay lại</a>
</p>
        </div>
        <div style="font-size:24px" ;>
            <table style="width: 100%";>
                <tr>
                    <td> <b style="margin-left: 100px" ;>Họ và tên: </b><?php echo $customer->fullname ?><hr></td>
                </tr>
                <tr>
                    <td> <b style="margin-left: 100px" ;>Tuổi: </b><?php echo $customer->age ?><hr></td>
                </tr>
                <tr>
                    <td> <b style="margin-left: 100px" ;>Địa chỉ: </b><?php echo $customer->address ?><hr></td>
                </tr>
            </table>
        </div>
</body>

</html>