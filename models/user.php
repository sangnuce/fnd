<?php
  class User {
    public $id;
    public $name;
    public $is_admin;

    public function __construct($id, $name) {
      $this->id = $id;
      $this->name = $name;
    }

    public static function all() {
      $list = [];
      $db = DB::getInstance();
      $req = $db->query('SELECT * FROM users');

      foreach($req->fetchAll() as $item) {
        $list[] = new User($item['id'], $item['name']);
      }

      return $list;
    }

    public static function find($id) {
      $db = DB::getInstance();
      $req = $db->prepare('SELECT * FROM users WHERE id = :id');
      $req->execute(array('id' => $id));
      $item = $req->fetch();
      if (isset($item['id'])) {
        return new User($item['id'], $item['name']);
      }
      return null;
    }
  }
?>
