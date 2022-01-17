
<html>
<body>
      <div class="featured-items">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <div class="line-dec"></div>
            
              </div>   
            </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
            <?php if (empty($product) === 0) : ?>
                    <!--kiểm tra nếu mảng rỗng-->
                    <tr>
                        <td>không có</td>
                    </tr>

                <?php endif; ?>

              <?php 
                  foreach ($products as $key => $product):
 
              ?>

              <a href="single-product.html">
                <div class="featured-item">
                  <img style="width: 250px;height:250px;" src="./assets/images/<?= $product->anh ?>" alt="Item 2">
                  <h4><?= $products->tensanpham ?></h4>
                  <h6><?= $products->giasanpham ?></h6>
                </div>
              </a>
              <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>