<?php
  class BaseController
  {
    protected $namespace;
    protected $folder;

    function render($view, $data = array()) {
      if (isset($this->namespace)) {
        $view_folder = 'views/' . $this->namespace;
      } else {
        $view_folder = 'views';
      }
      extract($data);
      ob_start();
      require_once($view_folder . '/' . $this->folder . '/' . $view .'.php');
      $content = ob_get_clean();
      require_once($view_folder . '/layouts/application.php');
    }

    protected function check_login() {
      if (!logged_in()) {
        $_SESSION['message'] = array('class' => 'warning', 'content' => 'Bạn chưa đăng nhập!');
        header('Location: index.php?controller=sessions&action=newSession');
        exit;
      }
    }

    protected function check_admin() {
      if (!is_admin()) {
        $_SESSION['message'] = array('class' => 'warning', 'content' => 'Bạn không có quyền truy cập trang này!');
        header('Location: index.php');
        exit;
      }
    }
  }
?>
