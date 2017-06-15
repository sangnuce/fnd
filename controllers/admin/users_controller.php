<?php
  require_once('models/user.php');

  class UsersController extends BaseController {
    function __construct() {
      parent::__construct('admin');
      $this->folder = 'users';
    }

    public function index() {
      $users = User::all();
      $data = array(
        'title' => 'Quản lý người dùng',
        'users' => $users
      );
      $this->render('index', $data);
    }

    public function newUser() {
      $this->render('new');
    }

    public function editUser() {
      $this->render('edit');
    }
  }
?>
