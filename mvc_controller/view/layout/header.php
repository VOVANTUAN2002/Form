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

<?php
if (isset($_SESSION['user_id']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: http://localhost/website/dang-nhap.php');
}else {
	if (isset($_SESSION['permision']) == true) {
		// Ngược lại nếu đã đăng nhập
		$permission = $_SESSION['permision'];
		// Kiểm tra quyền của người đó có phải là admin hay không
		if ($permission == '0') {
			// Nếu không phải admin thì xuất thông báo
			echo "Bạn không đủ quyền truy cập vào trang này<br>";
			echo "<a href='http://localhost/website/index.php'> Click để về lại trang chủ</a>";
			exit();
		}
	}
}
?>