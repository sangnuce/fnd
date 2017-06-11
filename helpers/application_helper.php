<?php
  require_once 'models/user.php';

  function logged_in() {
    if (current_user() == null) {
      return false;
    }
    return true;
  }

  function is_admin() {
    if (logged_in()) {
      return current_user()->is_admin;
    }
    return false;
  }

  function current_user() {
    return User::find($_SESSION['user_id']);
  }

  function display_title($title) {
    if (isset($title)) {
      return $title . ' - Food and Drink';
    }
    return 'Food and Drink';
  }
?>
