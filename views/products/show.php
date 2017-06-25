<div class="margin-top-20 col-md-12">
  <div class="col-md-9 col-sm-9 col-xs-12 show-detail-product">
    <div class="detail-img col-md-6 col-sm-6 col-xs-12">
      <div class="slider" id="slider">
        <div class="slItems">
          <?php
          $images = $product->getImages();
          if (count($images) > 1) {
            foreach ($images as $image) { ?>
              <div class="slItem" style="background-image: url('<?= $image->image ?>')"></div>
            <?php }
          } else { ?>
            <div class="one-image"
              style="background-image: url('<?= @$images[0] ? $images[0]->image : 'views/assets/images/no-image.png' ?>')">
            </div>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="detail-descrip col-md-6 col-sm-6 col-xs-12">
      <h2 class="detail-name-item"><?= $product->name ?></h2>
      <h3 class="detail-price"><?= number_format($product->price, 0, ",", ".") ?>VND</h3>
      <p class="detail-description-item">
        <?= $product->description ?>
      </p>

      <div class="col-sm-12 addToCart">
        <form class="cart-form col-md-12" method="POST" id="form-add-to-cart" data-product-id="<?= $product->id ?>">
          <div class="quantity">
            <label for="">Số lượng:</label>
            <div class="input-group">
              <input type="number" name="quantity" value="1" min="1" class="quantity-txt form-control" size="4">
              <span class="input-group-btn cart-control">
                <button type="submit" class="btn button-my-cart btn-danger">
                  <i class="fa fa-cart-plus"></i> Thêm vào giỏ hàng
                </button>
              </span>
            </div>
          </div>
        </form>
      </div>

      <div class="rate-share col-md-12">
        <div class="rating col-md-7">
          <label class="txt-rating">Đánh giá sản phẩm</label>
          <span class="lst-star">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </span>
        </div>
        <a
          href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>"
          class="btn col-md-5 share-fb btn-info" target="_blank">
          <i class="fa fa-facebook" aria-hidden="true"></i> Chia sẻ Facebook
        </a>
      </div>
    </div>

    <div class="cmt col-md-12">
      <div class="region-cmt col-md-8 col-md-offset-2 col-sm-offset-0 col-xs-offset-0 col-sm-12 col-xs-12">
        <div class="pt-title">
          <span class="number-cmt">2 bình luận</span>
        </div>
        <form method="" class="form-cmt col-md-12">
          <div class="form-group">
            <img src="views/assets/images/user.png" class="avatar-user img-circle"/>
            <input type="text" class="form-control" name="" value="Test cmt">
          </div>
        </form>
        <h5 class="infor-user-post">
          <span class="name-user-post">Dung Đỗ</span>
        </h5>

        <form method="" class="form-none-cmt form-cmt col-md-12">
          <div class="form-group">
            <img src="views/assets/images/user.png" class="avatar-user img-circle"/>
            <input type="text" class="form-control" name="" placeholder="Hãy bình luận sản phẩm mình thích"/>
          </div>
        </form>

      </div>
    </div>
  </div>

  <div class="side-bar col-md-3 col-sm-3 col-xs-12">
    <div class="category col-md-12 col-sm-12 xs-hidden part-sidebar">
      <div class="title-cat sub-title-sidebar">
        <h5>Danh mục sản phẩm</h5>
      </div>
      <div class="lst-cat lst-item-sidebar">
        <ul>
          <?php foreach ($categories as $category) {
            if ($category->parent_id > 0) continue;
            ?>
            <li>
              <a data-toggle="collapse" href="#subcategories-<?= $category->id ?>">
                <i class="fa fa-chevron-right" aria-hidden="true"></i> <?= $category->name ?>
              </a>
            </li>
            <ul id="subcategories-<?= $category->id ?>" class="collapse">
              <?php foreach ($categories as $subCategory) {
                if ($subCategory->parent_id != $category->id) continue;
                ?>
                <li>
                  <a href="<?= get_route('categories', 'showCategory', null, array('id' => $subCategory->id)) ?>">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i> <?= $subCategory->name ?>
                  </a>
                </li>
              <?php } ?>
            </ul>
          <?php } ?>
        </ul>
      </div>
    </div>

    <div class="relation-product col-md-12 col-sm-12 xs-hidden part-sidebar">
      <div class="title-cat sub-title-sidebar">
        <h5>Sản phẩm liên quan</h5>
      </div>
      <div class="lst-relation-item col-md-12">
        <ul class="col-md-12">
          <?php foreach ($product->getRelateProducts(5) as $relateProduct) { ?>
            <li class="col-md-12">
              <a href="<?= get_route('products', 'showProduct', null, array('id' => $relateProduct->id)) ?>">
                <div class="clearfix">
                  <img src="<?= getProductFirstImage($relateProduct) ?>"/>
                  <div class="infor-product-sidebar">
                    <h5 class="name-relation-item"><?= $relateProduct->name ?></h5>
                    <h5 class="price-relation-item"><?= number_format($relateProduct->price, 0, ",", ".") ?>VND</h5>
                  </div>
                </div>
              </a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</div></div>
<script>
  $(function () {
    $('#slider').rbtSlider({
      height: '70%',
      'dots': true,
      'arrows': true,
      'auto': 3
    });
    $('#form-add-to-cart').submit(function (event) {
      event.preventDefault();
      var quantity = parseInt($('.quantity-txt', $(this)).val());
      var product_id = $(this).data('product-id');
      $.ajax({
        url: 'index.php?controller=carts&action=createCart',
        type: 'POST',
        dataType: 'JSON',
        data: {
          quantity: quantity,
          product_id: product_id
        },
        success: function (data) {
          $('.number-product').html(data.total_product);
        }
      });
    });
  })
</script>
