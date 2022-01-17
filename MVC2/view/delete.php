<?php
include_once 'header.html';
include_once 'db.php';
?>
<br>
<h1 style="text-align: center;">Bạn chắc chắn muốn xóa khách hàng này?</h1>
<br>

    <div class="form-group">
        <a class="btn btn-danger" href="delete.php?id=<?php echo $_GET['id']?>">Delete</a>
        <a class="btn btn-primary" href="index.php">Cancel</a>
    </div>
