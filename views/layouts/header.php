<?php
require_once('models/cart_item.php');
$totalCartProduct = 0;
foreach (CartItem::all() as $cartItem) {
  $totalCartProduct += $cartItem->quantity;
}
?>
<header class="navbar navbar-inverse navbar-fixed-top custom-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my-navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="<?= root() ?>">
        <img src="views/assets/images/foodndrink.png" class="img-responsive">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="my-navbar">
      <ul class="nav navbar-nav">
        <li><a href="#hello">Welcome</a></li>
        <li><a href="#product">Sản phẩm</a></li>
        <li><a href="#contact">Liên hệ</a></li>
        <li title="Có <?= $totalCartProduct ?> sản phẩm trong giỏ hàng">
          <a href="<?= get_route('carts', 'showCart') ?>" class="icon-bag-cart">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            <span class="number-product"><?= $totalCartProduct ?></span>
          </a>
        </li>
      </ul>

      <div class="col-sm-3 col-md-3 find-input">
        <form class="navbar-form" role="search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search head-search-icon"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
      <ul class="nav navbar-nav navbar-right management-user">
        <?php if (logged_in()) { ?>
          <li>
            <a href="<?= get_route('users', 'showUser', null, array('id' => current_user()->id)) ?>">
              <?= current_user()->name ?>
            </a>
          </li>
          <?php if (is_admin()) { ?>
            <li><a href="<?= root('admin') ?>"><i class="fa fa-cogs"></i> Quản lý</a></li>
          <?php } ?>
          <li><a href="<?= get_route('sessions', 'destroySession') ?>"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
        <?php } else { ?>
          <li><a href="<?= get_route('users', 'newUser') ?>"><i class="fa fa-user"></i> Đăng ký</a></li>
          <li><a href="<?= get_route('sessions', 'newSession') ?>"><i class="fa fa-sign-in"></i> Đăng nhập</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</header>
