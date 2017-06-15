<?php
  class User {
    public $id;
    public $name;
    public $is_admin;

    public function __construct($id, $name, $is_admin = null) {
      $this->id = $id;
      $this->name = $name;
      $this->is_admin = $is_admin;
    }

    public static function all() {
      $list = [];
      $db = DB::getInstance();
      $req = $db->query('SELECT * FROM users');

      foreach($req->fetchAll() as $item) {
        $list[] = new User($item['id'], $item['name'], $item['is_admin']);
      }

      return $list;
    }

    public static function find($id) {
      $db = DB::getInstance();
      $req = $db->prepare('SELECT * FROM users WHERE id = :id');
      $req->execute(array('id' => $id));
      $item = $req->fetch();
      if (isset($item['id'])) {
        return new User($item['id'], $item['name'], $item['is_admin']);
      }
      return null;
    }

    public static function attempt($email, $password) {
      $db = DB::getInstance();
      $req = $db->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
      $req->execute(array('email' => $email, 'password' => md5($password)));
      $item = $req->fetch();
      if (isset($item['id'])) {
        return new User($item['id'], $item['name'], $item['is_admin']);
      }
      return null;
    }
  }
?>
