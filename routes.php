<?php
  $controllers = array(
    'pages' => ['home', 'error'],
  );

  if (array_key_exists($controller, $controllers) && in_array($action, $controllers[$controller])) {
    call($controller, $action);
  } else {
    call('pages', 'error');
  }

  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');
    $klass = ucwords($controller, '_') . 'Controller';
    $controller = new $klass;
    $controller->$action();
  }
?>
