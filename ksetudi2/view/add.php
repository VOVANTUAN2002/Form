<!-- View -->

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