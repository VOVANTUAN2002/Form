<?php
include_once('db.php');

$db = new db();
$connect = $db->connect();
    $sql = "SELECT * FROM products WHERE mahang = '" . $_GET['mahang'] . "'";
    $query = $connect->prepare($sql);
    $query->execute();
    $products = array();
    while ($result = $query->fetch(PDO::FETCH_OBJ)) {
        $products = $result;
    }

if ($_POST  && $_POST['tenhang'] && $_POST['loaihang'] && $_POST['gia'] && $_POST['soluong'] && $_POST['motavemathang']) {



$sql = "UPDATE `products` SET 
`tenhang` = '".$_POST['tenhang']."', 
`loaihang` = '".$_POST['loaihang']."', 
`gia` = '".$_POST['gia']."', 
`soluong` = '".$_POST['soluong']."',  
`motavemathang` = '".$_POST['motavemathang']."' 
WHERE  mahang = '".$_GET['mahang']."' ";

   
    // print_r($sql);
    // die();

    $connect->exec($sql);
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Thêm</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Sửa mặt hàng</h1>
        <form  method="POST" class="form">
            <div class="form-group">
                <label>Tên hàng</label>
                <input value="" name="tenhang" class="form-control">
            </div>
            <div class="form-group">
                <label>Loại hàng</label>
                <select name="loaihang">
                    <option>điện thoại</option>
                    <option>diều hòa</option>
                    <option>tủ lạnh</option>
                </select>
                <br>
            </div>
            <div class="form-group">
                <label>Giá</label>
                <input value="" name="gia" class="form-control">
                <br>
            </div>
            <div class="form-group">
                <label>Số lượng</label>
                <input value="" name="soluong" class="form-control">
                <br>
            </div>
            <div class="form-group">
                <label>Mô tả về mặt hàng</label>
                <input value="" name="motavemathang" class="form-control">
                <br>
            </div>
            <button type="submit" name="submit" class="btn btn-info" >lưu</button>
            <a href="index.php" class="btn btn-default">Quay lại</a>
    </div>
    </form>
</body>

</html>