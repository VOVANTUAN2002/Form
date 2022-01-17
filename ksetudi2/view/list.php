<!-- View -->

<body style="background-color: #eee;">

    <div class="col-lg-12 icon" style="background-color: black;padding:10px;color:white;">

        <ul class="nav" style="list-style-type:none;margin: -10px;">

            <li><a href="#"><i class="fas fa-user-circle" style="font-size:20px"></i> Quản Trị</a></li>
            <li><a href="#"><i class="fas fa-users" style="font-size:20px"></i> Quản lý danh mục</a></li>
            <li><a href="#"><i class="fas fa-user" style="font-size:20px"></i> Quảng lý sản phẩm</a></li>
            <li style="float: right;"><a href="#"><i class="fa fa-search" style="font-size:20px;text-align: right;">Tìm Kiếm</i></a></li>
        </ul>
    </div>

    <body>
        <div class="container">
            <h1 style="text-align:center"> Danh sách khách hàng</h1>
            <a href="index.php?home=add" class="btn btn-info"><i class="fas fa-user-plus"></i>Thêm mới</a>

            <table class="table tale-boder" border="2px">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Họ Và Tên</td>
                        <td>Tuổi</td>
                        <td>Địa chỉ</td>
                        <td style="text-align:center ">Chức năng</td>
                    </tr>
                </thead>
                <tbody>
                    <!--kiểm tra nếu biến if(empty($products)):  rỗng-->
                    <?php if (empty($products) === 0) : ?>
                        <!--kiểm tra nếu mảng rỗng-->
                        <tr>
                            <td>không có</td>
                        </tr>

                    <?php endif;
                    foreach ($product as $products) :
                    ?>
                        <tr>
                            <td><?= $product->id ?></td>
                            <td><?= $product->tensanpham ?></td>
                            <td><?= $product->giasanpham ?></td>
                            <td><?= $product->anh ?></td>

                            <td><a href="index.php?home=detail&id=<?php echo $product->id ?>" class="btn btn-primary">Xem chi tiết</a></td>
                            <td><a href="index.php?home=edit&id=<?php echo $product->id ?>" class="btn btn-primary">Sửa</a></td>
                            <td><a href="index.php?home=delete&id=<?php echo $product->id ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>

    </html>