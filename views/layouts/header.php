<header class="navbar navbar-inverse navbar-fixed-top custom-navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my-navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="<?= root() ?>">FoodnDrink</a>
    </div>
    <div class="collapse navbar-collapse" id="my-navbar">
      <ul class="nav navbar-nav">
        <li><a href="#">About</a></li>
        <li><a href="#">Help</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if (logged_in()) { ?>
          <?php if (is_admin()) { ?>
            <li><a href="<?= root('admin') ?>"><i class="fa fa-cogs"></i> Quản lý</a></li>
          <?php } ?>
          <li><a href="<?= get_route('sessions', 'destroySession') ?>"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
        <?php } else { ?>
          <li><a href="#"><i class="fa fa-user"></i> Đăng ký</a></li>
          <li><a href="<?= get_route('sessions', 'newSession') ?>"><i class="fa fa-sign-in"></i> Đăng nhập</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</header>
