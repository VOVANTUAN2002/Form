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
        <h1 class="text-center" style="text-align:center">Thêm mới khách hàng</h1>
        <form action="index.php?home=store" method="POST" class="form">
            <div class="form-group">
                <label>Fullname</label>
                <input value="" name="fullname" class="form-control">
                <p><?php echo (isset($_SESSION["errors"]['fullname'])) ? $_SESSION["errors"]['fullname'] : ""; ?></p>
            </div>
            <div class="form-group">
                <label>Age</label>
                <input value="" name="age" class="form-control">
            </div>
            <div class="form-group">
                <label>Addres</label>
                <input value="" name="addres" class="form-control">
                <br>
            </div>
            <button type="submit" name="submit" class="btn btn-primary" value="">Lưu</button>
            <input type="button" onclick="window.history.go(-1); return false; " name="submit" class="btn btn-primary" value="quay lai">
        </form>
    </div>
</body>

</html>
<?php
unset($_SESSION["errors"]);
?>