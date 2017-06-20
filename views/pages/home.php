<div class="main-content col-md-12 col-sm-12 col-xs-12">
  <div class="slider col-md-12 col-sm-12 hidden-xs">
    <div class="zoom-slide-img col-md-9 col-sm-9 col-xs-12">
      <img src="views/assets/images/slide-1.jpg" class="img-responsive">
    </div>
    <ul class="lst-slider col-md-3 col-sm-3 col-xs-12">
      <li><img src="views/assets/images/slide-1.jpg" class="img-responsive"></li>
      <li><img src="views/assets/images/slide-2.jpg" class="img-responsive"></li>
      <li><img src="views/assets/images/slide-3.jpg" class="img-responsive"></li>
    </ul>
  </div>

  <div class="lst-product col-md-9 col-sm-9 col-xs-12">
    <?php foreach ($categories as $category) {
      $products = $category->getProducts();
      if (empty($products)) continue;
      ?>
      <div class="lst-drink detail-cat col-md-12 col-xs-12 col-sm-12">
        <h4 class="title-lst txt-drink">
          <i class="fa fa-hand-o-right" aria-hidden="true"></i> <?= $category->name ?>
        </h4>
        <div class="col-sm-12 col-md-12 detail-item">
          <?php foreach ($products as $product) { ?>
            <div class="col-md-3 item">
              <a href="<?= get_route('products', 'showProduct', null, array('id' => $product->id)) ?>">
                <img src="<?= getProductFirstImage($product) ?>" class="img-responsive">
              </a>
              <div class="infor-product col-md-12">
                <a href="<?= get_route('products', 'showProduct', null, array('id' => $product->id)) ?>">
                  <h4 class="name-item"><?= $product->name ?></h4>
                </a>
                <h4 class="price-item"><?= number_format($product->price, 0, ",", ".") ?> VND</h4>
                <button type="button" class="btn btn-success btn-add-cart">Mua ngay</button>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php } ?>
  </div>

  <div class="side-bar col-md-3 col-sm-3 col-xs-12">
    <div class="category col-md-12 col-sm-12 xs-hidden">
      <div class="title-cat">
        <h5>Danh mục sản phẩm</h5>
      </div>
      <div class="lst-cat">
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
  </div>
</div>
