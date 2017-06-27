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
    if (current_user()) {
      $rating = $product->getRatingBy(current_user());
      $rated_score = $rating ? $rating->score : 0;
    } else {
      $rated_score = 0;
    }
    $comments = $product->getComments();
    $data = array('title' => $product->name, 'categories' => $categories, 'product' => $product, 'rated_score' => $rated_score, 'comments' => $comments);
    $this->render('show', $data);
  }
}
