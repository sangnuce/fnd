<?php
require_once('models/user.php');

class UsersController extends BaseController
{
  function __construct()
  {
    parent::__construct('admin');
    $this->folder = 'users';
  }

  public function index()
  {
    $users = User::all();
    $data = array('title' => 'Quản lý người dùng', 'users' => $users);
    $this->render('index', $data);
  }

  public function newUser()
  {
    $data = array('title' => 'Thêm mới người dùng');
    $this->render('new', $data);
  }

  public function createUser()
  {
    $item = new User(null, @$_POST['email'], md5('123456'), @$_POST['name'], @$_POST['phone'], @$_POST['activated'], @$_POST['is_admin']);
    $rs = User::insert($item);
    if ($rs) {
      $_SESSION['message'] = array('class' => 'success', 'content' => 'Thêm mới người dùng thành công');
      redirect_to(get_route('users', 'index', 'admin'));
    } else {
      $_SESSION['message'] = array('class' => 'danger', 'content' => 'Thêm mới người dùng thất bại');
      $data = array('title' => 'Thêm mới người dùng');
      $this->render('new', $data);
    }
  }

  public function editUser()
  {
    $user = User::find($_GET['id']);
    $data = array('title' => 'Sửa thông tin người dùng', 'user' => $user);
    $this->render('edit', $data);
  }

  public function updateUser()
  {
    $item = User::find($_GET['id']);
    $item->email = @$_POST['email'];
    $item->name = @$_POST['name'];
    $item->phone = @$_POST['phone'];
    $item->activated = @$_POST['activated'];
    $item->is_admin = @$_POST['is_admin'];
    $rs = User::update($item);
    if ($rs) {
      $_SESSION['message'] = array('class' => 'success', 'content' => 'Sửa thông tin người dùng thành công');
      redirect_to(get_route('users', 'index', 'admin'));
    } else {
      $_SESSION['message'] = array('class' => 'danger', 'content' => 'Sửa thông tin người dùng thất bại');
      $data = array('title' => 'Sửa thông tin người dùng');
      $this->render('edit', $data);
    }
  }
}

?>
