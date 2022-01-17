<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background:url(noel.jpg)">
    <?php
    session_start();
    $json_users = file_get_contents('user.json');
    if ($json_users) {
        $users = json_decode($json_users);
    } else {
        $users = [];
    }
    $user = (isset($_SESSION['user'])) ? $_SESSION['user'] : '';
    $errors = [];
    $alert = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        /*
        Array
      (
          [email] => add@gmail.com
          [password] => 12345
      ) 
   */
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];


        $can_do = true;
        foreach ($users as $user) {
            // echo $user->email. ' _ ' . $email. '<br>';
            // echo $user->password. ' _ ' . $password. '<br>';
            // echo '<hr>';
            if ($user->email == $email && $user->password == $password) {
                //xu ly đăng nhập
                $_SESSION['user'] = $user;
                $can_do = false;
                break;
            } else {
                //chuyển hướng
                header("Location: users.php");
            }
        }
        if ($can_do == false) {
            $alert = 'Login failed';
        }
    }



    ?>
    <audio controls autoplay style="width:1px">
        <source src="y2mate.com - Save Me remix EDM new 2017.mp3.webm" type="">
    </audio>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center" style="color:white">Login</h3>
                <?php if ($user) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= $user = (empty($user)) ?   "  " . $user : " You have successfully registered !"; ?>
                    </div>
                <?php endif; ?>
                <?php if ($alert) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $alert; ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="POST" novalidate="true">
                    <div class="form-group">
                        <label style="color:white">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter email" name="email">

                        <small class="form-text text-danger">
                            <?= (isset($errors['email'])) ? $errors['email'] : "";  ?>

                        </small>
                    </div>
                    <div class="form-group">
                        <label style="color:white">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <small class="form-text text-danger">
                            <?= (isset($errors['password'])) ? $errors['password'] : "";  ?>

                        </small>
                    </div>

                    <button type="submit" class="form-control" style="background-color:yellow">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>