<?php
session_start();
$json_users = file_get_contents('uuser.json');
if ($json_users) {
  $users = json_decode($json_users);
} else {
  $users = [];
}

$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : '';
?>
<?php include 'layout/header.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="text-center">Users</h3>
      <?php if ($user) : ?>
        <div class="alert alert-success" role="alert">
          <?php echo   $user = (empty($user)) ? "" : " Xin chào, " . $user->Username; ?>
          <?php $alert; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $key => $user) : ?>
            <tr>
              <th scope="row"><?= $key + 1; ?></th>
              <td><?= $user->Username; ?></td>
              <td><?= $user->email; ?></td>
              <td>
                <a href="edit.php?id=<?= $user->id ?>" class="btn btn-info">Edit</a>
                <a href="delete.php?id=<?= $user->id ?>" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
  body {
    background: rgb(221, 209, 999);
  }
</style>