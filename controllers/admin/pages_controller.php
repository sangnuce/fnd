<?php
  class PagesController extends BaseController {
    function __construct() {
      parent::__construct('admin');
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
