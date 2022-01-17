
<body>

    <div class="container">
        <h1 class="text-center" style="text-align:center">Sửa thông tin khách hàng</h1>
        <form method="POST" action="index.php?home=update&&id=<?php echo $product->id; ?>" class="form">
            <input name="id" type="hidden" value="<?php echo $product->id ?>">
            <div class="form-group">
                <label>fullname</label>
                <input name="fullname" value="<?= $product->tensanpham ?>" class="form-group">
            </div>
            <div class="form-group">
                <label>age</label>
                <input name="age" value="<?= $product->giasanpham ?>" class="form-group">
            </div>
            <div class="form-group">
                <label>addres</label>
                <input name="addres" value="<?= $product->anh ?>" class="form-group">
            </div>
            <button type="submit" name="submit">Lưu</button>
    </div>
    </form>
</body>

</html>