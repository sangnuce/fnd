<?php
require_once('models/user.php');

class UsersController extends BaseController
{
  function __construct()
  {
    $this->folder = 'users';
  }

  public function newUser()
  {
    $data = array('title' => 'Đăng ký tài khoản');
    $this->render('new', $data);
  }

  public function createUser()
  {
    if ($this->validate()) {
      $item = new User(null, @$_POST['email'], md5(@$_POST['password']), @$_POST['name'], @$_POST['phone']);
      $rs = User::insert($item);
      if ($rs) {
        $item->id = $rs;
        $_SESSION['user'] = serialize($item);
        $_SESSION['message'] = array('class' => 'success', 'content' => 'Đăng ký tài khoản thành công');
        redirect_to(root());
      } else {
        $_SESSION['message'] = array('class' => 'danger', 'content' => 'Đăng ký tài khoản thất bại');
        $data = array('title' => 'Đăng ký tài khoản');
        $this->render('new', $data);
      }
    } else {
      $_SESSION['message'] = array('class' => 'danger', 'content' => 'Đăng ký tài khoản thất bại');
      $data = array('title' => 'Đăng ký tài khoản');
      $this->render('new', $data);
    }
  }

  function validate() {
    $rs = true;
    if (@$_POST['email']) {
      if (User::findByEmail($_POST['email'])) {
        $_SESSION['form_errors'][] = "Email đã tồn tại trong hệ thống";
        $rs = false;
      }
    } else {
      $_SESSION['form_errors'][] = "Email chưa được nhập";
      $rs = false;
    }
    if (@$_POST['password']) {
      if ($_POST['password'] != @$_POST['confirm_password']) {
        $_SESSION['form_errors'][] = "Mật khẩu không trùng khớp";
        $rs = false;
      }
    } else {
      $_SESSION['form_errors'][] = "Mật khẩu chưa được nhập";
      $rs = false;
    }
    return $rs;
  }
}
