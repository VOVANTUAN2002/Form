<?php
$errors = [];

// echo "<pre>";
// print_r($errors);
// echo "</pre>";
//Kiểm tra xem đã submit form hay chưa
//isset() kiểm tra tồn tài của biến 
/*
if(isset($tontai)){
    nếu khai báo rồi thì sẽ true
}else{
    nếu chưa khai báo thì sẽ false
}
*/
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //lấy giá trị lưu vào bộ nhớ
    $taikhoan = $_REQUEST['taikhoan'];
    $matkhau = $_REQUEST['matkhau'];
    $email = $_REQUEST['email'];
    //xu lý và xuất
    if ($taikhoan == ""){
        $errors["taikhoan"] = "Vui lòng nhập tài khoản!!" ;
    }
    if ($matkhau == ""){
        $errors["matkhau"] = "Vui lòng  nhập mật khẩu!!" . "<br>";
      }
    if ($email == "") {
        $errors["email"] ="Vui lòng nhập email!!";

    }
    if(count($errors) === 0)
    {//= là đặt một biến = một giá trị ; == toán tủ nếu bằng; === bằng tất cả kiểu
        echo "Đăng nhập thành công";
        $fileJson="user.json";// đường dẫn file json
        $user = $_REQUEST;// bằng cái mảng $_REQUEST
        $users = file_get_contents($fileJson);
        echo "<pre>";
        print_r($user);
        echo "</pre>";
        // echo "<pre>";
        //   print_r($users);// nhận dữ liệu của filejson
        // echo "</pre>";
        // die();
            if($users == "")
            {
                $users=[];
            } 
            else 
            {
                $users = json_decode($users,true);// đổi $users sang dạng []
            }
            $users[] = $user;// push $user vào mảng $users 
            $data = json_encode($users);// đổi $users sang dạng json
            file_put_contents($fileJson,$data);//file_put_contents(url,$data)url là đường link ;$data là mảng ;
            // push vào filejson một cái mảng data

    }



}
?>
<form action="" method="POST">
tai khoan
<input type="text" name="taikhoan"><br>
<p><?php echo $errors["taikhoan"] = (isset($errors["taikhoan"])) ? $errors["taikhoan"] : ""; // ?  hỏi làm gì : ngược lại ?></p>
<br>
<br>
mat khau
<input type="text" name="matkhau"><br>
<p><?php echo $errors["matkhau"] = (isset($errors["matkhau"])) ? $errors["matkhau"]: "";?>
<br>
<br>
email
<input type="text" name="email"><br>
<p><?php echo $errors["email"] = (isset($errors["email"])) ? $errors["email"]: "";?>
<br>
<br>
<button type="submit">submit</button>
</form> 
<style>
    form {
    width: 300px;
    border: 10px solid green;
    padding: 20px;
    margin: 0 auto;
    font-weight: 700px;
}
form input {
    width: 100%;
    padding: 10px 0;
}
</style>