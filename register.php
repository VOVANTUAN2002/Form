<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Document</title>
</head>
<body style="background:url(ad.jpg) ; width:100% ; height:100%">
   
<?php
class User {
   public $username;
   public $email;
   public $password;


}

$errors = [];
$show_alert = (isset ($_REQUEST['show_alert'])) ? $_REQUEST['show_alert'] : 0;
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $username  =  $_REQUEST['username'];
  $email     =  $_REQUEST['email'];
  $password  =  $_REQUEST['password'];

  if( $username == ''){
     $errors['username'] = 'Username is required field !';
  }

  if( $email == ''){
     $errors['email'] = 'Email is required field !';
  }

  if( $password == ''){
     $errors['password'] = 'Password is required field !';
  }

  if(count($errors) == 0 ){
     $objUser = new User($username,$password,$email,3);

     $objUser->username = $username;
     $objUser->id = time();
     $objUser->email = $email;
     $objUser->password = $password;

   $json_users = file_get_contents('trangdangnhap/uuser.json');
   if( $json_users)
      $users = json_decode($json_users);
   }else{
      $users = [];
   }

   //push to users array
   $users[] = $objUser;
   //convert to json string 
   $users = json_encode($users);
   file_put_contents( 'user.json', $users);

   //redirect to login page
   header("Location: login.php?show_alert=1");

  }
?>

<audio controls autoplay style="width: 1px">
    <source src="y2mate.com - Người Tình Mùa Đông  H2K x KProxLo  Fi Ver  Audio Lyrics Video.mp3" type="">
</audio>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <h3 class="text-center" style="color:white">Register</h3>
               <?php if( $show_alert): ?>
                  <div class="alert alert-success" role="alert">
                     Đăng ký thành công, Vui lòng nhấn vào <a href="login.php"> đây</a>
                     để tới trang đăng nhập
                </div>
                <?php endif; ?>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <form action="" method="POST">
                  <div class="form-group">
                     <label style="color:white" >Username</label>
                     <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Username" name="username">
                     <small  class="form-text text-danger" >
                        <?php echo (isset( $errors['username'])) ? $errors['username'] :""; ?>
                     </small>
                  </div>
                  <div class="form-group">
                     <label style="color:white" >Email</label>
                     <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
                     <small  class="form-text text-danger">
                     <?php echo (isset( $errors['email'])) ? $errors['email'] :""; ?>
                     </small>
                  </div>
                  <div class="form-group">
                     <label style="color:white" >Password</label>
                     <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password" name="password" >
                     <small  class="form-text text-danger">
                     <?php echo (isset( $errors['password'])) ? $errors['password'] :""; ?>
                     </small>
                  </div>
                
                  <button type="submit" class="form-control" style="background-color:yellow">Đăng kí</button>
                

               </form>
            </div>
         </div>
      </div>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



</body>
</html>