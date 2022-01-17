<!-- View -->
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: #eee;">
        
        <div class="col-lg-12 icon" style="background-color: black;padding:10px;color:white;">
            
            <ul  class="nav"   style="list-style-type:none;margin: -10px;"> 
               
           <li><a href="#"><i class="fas fa-user-circle" style="font-size:20px"></i> Quản Trị</a></li>
           <li><a href="#"><i class="fa fa-instagram" style="font-size:20px"></i> Quản lý danh mục</a></li>
           <li><a href="#"><i class="fa fa-snapchat" style="font-size:20px"></i> Quảng lý sản phẩm</a></li>   
           <li style="float: right;"><a href="#"><i class="fa fa-search" style="font-size:30px;text-align: right;"></i></a></li>
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
                <!--kiểm tra nếu biến if(empty($customers)):  rỗng-->
                <?php if (empty($customers) === 0) : ?>
                    <!--kiểm tra nếu mảng rỗng-->
                    <tr>
                        <td>không có</td>
                    </tr>

                <?php endif;
                foreach ($customers as $customer) :
                ?>
                    <tr>
                        <td><?= $customer->id ?></td>
                        <td><?= $customer->fullname ?></td>
                        <td><?= $customer->age ?></td>
                        <td><?= $customer->addres ?></td>

                        <td><a href="index.php?home=detail&id=<?php echo $customer->id ?>" class="btn btn-primary">Xem chi tiết</a></td>
                        <td><a href="index.php?home=edit&id=<?php echo $customer->id ?>" class="btn btn-primary">Sửa</a></td>
                        <td><a href="index.php?home=delete&id=<?php echo $customer->id ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>