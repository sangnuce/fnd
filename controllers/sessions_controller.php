<?php
  require_once('models/user.php');

  class SessionsController extends BaseController {
    function __construct() {
      $this->folder = 'sessions';
    }

    public function newSession() {
      $this->render('new');
    }

    public function createSession() {
      $user = User::attempt($_POST['email'], $_POST['password']);
      if ($user != null) {
        $_SESSION['user'] = serialize($user);
        $_SESSION['message'] = array('class' => 'success', 'content' => 'Đăng nhập thành công!');
        header('Location: index.php');
        exit;
      }

      $_SESSION['message'] = array('class' => 'danger', 'content' => 'Đăng nhập thất bại!');
      $this->render('new');
    }

    public function destroySession() {
      if (logged_in()) {
        unset($_SESSION['user']);
        $_SESSION['message'] = array('class' => 'info', 'content' => 'Bạn vừa đăng xuất khỏi hệ thống!');
        header('Location: index.php?controller=sessions&action=newSession');
        exit;
      }
      header('Location: index.php?controller=sessions&action=newSession');
    }
  }
?>
