<?php
  session_start();
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  require_once('db.php');

  if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    if (isset($_GET['action'])) {
      $action = $_GET['action'];
    } else {
      $action = 'index';
    }
  } else {
    $controller = 'pages';
    $action = 'home';
  }

  ob_start();
  require_once('routes.php');
  $content = ob_get_clean();

  require_once('views/layouts/application.php');
?>
