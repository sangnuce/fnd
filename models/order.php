<?php
require_once('models/order_detail.php');

class Order
{
  public $id;
  public $user_id;
  public $receiver_name;
  public $receiver_address;
  public $receiver_phone;
  public $note;
  public $amount;
  public $status;

  public function __construct($id, $user_id, $receiver_name, $receiver_address, $receiver_phone, $note, $amount, $status = 0)
  {
    $this->id = $id;
    $this->user_id = $user_id;
    $this->receiver_name = $receiver_name;
    $this->receiver_address = $receiver_address;
    $this->receiver_phone = $receiver_phone;
    $this->note = $note;
    $this->amount = $amount;
    $this->status = $status;
  }


  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM orders');

    foreach ($req->fetchAll() as $item) {
      $list[] = new Order($item['id'], $item['user_id'], $item['receiver_name'], $item['receiver_address'], $item['receiver_phone'], $item['note'], $item['amount'], $item['status']);
    }

    return $list;
  }

  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM orders WHERE id = :id');
    $req->execute(array('id' => $id));
    $item = $req->fetch();
    if (isset($item['id'])) {
      return new Order($item['id'], $item['user_id'], $item['receiver_name'], $item['receiver_address'], $item['receiver_phone'], $item['note'], $item['amount'], $item['status']);
    }
    return null;
  }

  static function insert($item)
  {
    $db = DB::getInstance();
    $query = $db->prepare("INSERT INTO orders(user_id, receiver_name, receiver_address, receiver_phone, note, amount, status)
      VALUE (:user_id, :receiver_name, :receiver_address, :receiver_phone, :note, :amount, :status)");
    $rs = $query->execute(array(
      'user_id' => $item->user_id,
      'receiver_name' => $item->receiver_name,
      'receiver_address' => $item->receiver_address,
      'receiver_phone' => $item->receiver_phone,
      'note' => $item->note,
      'amount' => $item->amount,
      'status' => $item->status
    ));
    if ($rs) return $db->lastInsertId();
    return $rs;
  }

  static function update($item)
  {
    $db = DB::getInstance();
    $query = $db->prepare("UPDATE categories SET name=:name, parent_id=:parent_id WHERE id=:id");
    $rs = $query->execute(array('name' => $item->name, 'parent_id' => $item->parent_id, 'id' => $item->id));
    return $rs;
  }

  function getOrderDetails() {
    $list = [];
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM order_details WHERE order_id=:order_id');
    $req->execute(array('order_id' => $this->id));

    foreach ($req->fetchAll() as $item) {
      $list[] = new OrderDetail($item['order_id'], $item['product_id'], $item['quantity'], $item['price']);
    }

    return $list;
  }
}
