<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= display_title($title) ?></title>

    <link rel="stylesheet" href="views/admin/assets/stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="views/admin/assets/stylesheets/font-awesome.min.css">
    <link rel="stylesheet" href="views/admin/assets/stylesheets/AdminLTE.min.css">
    <link rel="stylesheet" href="views/admin/assets/stylesheets/skin-blue.css">
    <link rel="stylesheet" href="views/admin/assets/stylesheets/custom.css">

    <script src="views/admin/assets/javascripts/jquery-2.2.3.min.js"></script>
    <script src="views/admin/assets/javascripts/bootstrap.min.js"></script>
    <script src="views/admin/assets/javascripts/app.min.js"></script>
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      <?php include_once('views/admin/layouts/header.php') ?>
      <?php include_once('views/admin/layouts/sidebar.php') ?>
      <div class="content-wrapper">
        <?= @$content ?>
      </div>
      <?php include_once('views/admin/layouts/footer.php') ?>
    </div>
  <body>
<html>
