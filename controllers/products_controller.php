<?php
require_once('models/product.php');

class ProductsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'products';
  }

  public function showProduct()
  {
    $categories = Category::all();
    $product = Product::find($_GET['id']);
    $data = array('title' => $product->name, 'categories' => $categories, 'product' => $product);
    $this->render('show', $data);
  }
}
