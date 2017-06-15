<?php
  require_once 'models/user.php';

  function logged_in() {
    if (current_user()) {
      return true;
    }
    return false;
  }

  function is_admin() {
    if (logged_in()) {
      return current_user()->is_admin;
    }
    return false;
  }

  function current_user() {
    return unserialize(@$_SESSION['user']);
  }

  function display_title($title) {
    if (isset($title)) {
      return $title . ' - Food and Drink';
    }
    return 'Food and Drink';
  }

  function redirect_to($route) {
    header("Location: $route");
    exit;
  }

  function get_route($controller, $action, $namespace = null) {
    if ($namespace) {
      return "index.php?namespace=$namespace&controller=$controller&action=$action";
    }
    return "index.php?controller=$controller&action=$action";
  }

  function root($namespace = null) {
    $url = 'index.php';
    if ($namespace) {
      $url = $url . "?namespace=$namespace";
    }
    return $url;
  }
?>
