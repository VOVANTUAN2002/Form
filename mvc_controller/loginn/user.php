<?php
session_start();

$json_users = file_get_contents('uuser.json');
if ($json_users) {
  $users = json_decode($json_users);
} else {
  $users = [];
}
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : ' ';

$alert = (isset($_SESSION['alert']) && !empty($_SESSION['alert'])) ? $_SESSION['alert'] : "";
?>
<audio controls autoplay style="width: 0%">
</audio>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="text-center">Danh Sách Tài Khoản Khách Hàng</h3>
      <?php if ($user) : ?>
        <div class="alert alert-success" role="alert">

        </div>
      <?php endif; ?>

      <?php if ($alert) : ?>
        <div class="btn btn-danger" role="alert">
          <?php echo (empty($alert)) ? " " :  $alert; ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <table class="table">

          <thead>
            <tr>
              <th scope="col"><b>STT</b></th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <!-- <th scope="col">Action</th> -->
            </tr>
          </thead>

          <tbody>

            <?php foreach ($users as $key => $user) :
            ?>
              <tr>
                <th scope="row"><?= $key + 1; ?></th>
                <td><?= $user->fullname; ?></td>
                <td><?= $user->email; ?></td>
                <td>
                  <!-- <a href="edit.php?id=<?= $user->id; ?>" class="btn btn-info">Edit</a>
                  <a href="delete.php?id=<?= $user->id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> -->
                </td>
              </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
  <style>
    /* body {
      background: rgb(221, 209, 999);
    } */

    form {
      width: 100%;
      border: 2px solid rgb(153, 168, 153);
      padding: 20px;
      margin: 0 auto;
      font-weight: 100%;
    }

    form label {
      width: 50px;
      padding: 13px;
    }
  </style>