<?php
include_once './model/customerModel.php';
include_once './model/db.php';
?>
<!-- View -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center" style="text-align:center">Sửa thông tin khách hàng</h1>
        <form method="POST" action="index.php?home=update&&id=<?php echo $customer->id; ?>" class="form">
            <input name="id" type="hidden" value="<?php echo $customer->id ?>">
            <div class="form-group">
                <label>fullname</label>
                <input name="fullname" value="<?= $customer->fullname ?>" class="form-group">
            </div>
            <div class="form-group">
                <label>age</label>
                <input name="age" value="<?= $customer->age ?>" class="form-group">
            </div>
            <div class="form-group">
                <label>addres</label>
                <input name="addres" value="<?= $customer->addres ?>" class="form-group">
            </div>
            <button type="submit" name="submit">Lưu</button>
    </div>
    </form>
</body>

</html>