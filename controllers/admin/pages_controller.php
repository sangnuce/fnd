<?php
  class PagesController extends BaseController {
    function __construct() {
      $this->check_login();
      $this->check_admin();

      $this->namespace = 'admin';
      $this->folder = 'pages';
    }

    public function home() {
      $this->render('home');
    }

    public function error() {
      $this->render('error');
    }
  }
?>
