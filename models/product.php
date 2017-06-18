<?php
require_once('models/category.php');
require_once('models/product_image.php');

class Product
{
  public $id;
  public $name;
  public $price;
  public $description;
  public $category_id;
  public $status;

  public function __construct($id, $name, $price, $description, $category_id, $status)
  {
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
    $this->description = $description;
    $this->category_id = $category_id;
    $this->status = $status;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM products');

    foreach ($req->fetchAll() as $item) {
      $list[] = new Product($item['id'], $item['name'], $item['price'], $item['description'], $item['category_id'], $item['status']);
    }

    return $list;
  }

  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM products WHERE id = :id');
    $req->execute(array('id' => $id));
    $item = $req->fetch();
    if (isset($item['id'])) {
      return new Product($item['id'], $item['name'], $item['price'], $item['description'], $item['category_id'], $item['status']);
    }
    return null;
  }

  static function insert($item)
  {
    $db = DB::getInstance();
    $query = $db->prepare("INSERT INTO products(name, price, description, category_id, status)
      VALUE (:name, :price, :description, :category_id, :status)");
    $rs = $query->execute(array('name' => $item->name, 'price' => $item->price, 'description' => $item->description, 'category_id' => $item->category_id, 'status' => $item->status));
    if ($rs) return $db->lastInsertId();
    return $rs;
  }

  static function update($item)
  {
    $db = DB::getInstance();
    $query = $db->prepare("UPDATE products SET name=:name, price=:price, description=:description, category_id=:category_id, status=:status WHERE id=:id");
    $rs = $query->execute(array('name' => $item->name, 'price' => $item->price, 'description' => $item->description, 'category_id' => $item->category_id, 'status' => $item->status, 'id' => $item->id));
    return $rs;
  }

  static function destroy($item)
  {
    $db = DB::getInstance();
    $query = $db->prepare("DELETE FROM products WHERE ID=:id");
    $rs = $query->execute(array('id' => $item->id));
    if ($rs) {
      remove_dir('uploads/products/' . $item->id);
    }
    return $rs;
  }

  function getCategoryName()
  {
    $category = Category::find($this->category_id);
    if ($category) return $category->name;
    return '';
  }

  function getImages()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM product_images WHERE product_id=:product_id');
    $req->execute(array('product_id' => $this->id));

    foreach ($req->fetchAll() as $item) {
      $list[] = new ProductImage($item['id'], $item['product_id'], $item['image']);
    }

    return $list;
  }
}
