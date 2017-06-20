<?php
require_once 'models/user.php';

function logged_in()
{
  if (current_user()) {
    return true;
  }
  return false;
}

function is_admin()
{
  if (logged_in()) {
    return current_user()->is_admin;
  }
  return false;
}

function current_user()
{
  return unserialize(@$_SESSION['user']);
}

function display_title($title)
{
  if (isset($title)) {
    return $title . ' - Food and Drink';
  }
  return 'Food and Drink';
}

function redirect_to($route)
{
  header("Location: $route");
  exit;
}

function get_route($controller, $action, $namespace = null, $params = array())
{
  $namespace_param = $namespace ? "namespace=$namespace&" : '';
  $url = "index.php?{$namespace_param}controller=$controller&action=$action";
  if (!empty($params)) {
    foreach ($params as $key => $value) {
      $url .= "&$key=$value";
    }
  }
  return $url;
}

function root($namespace = null)
{
  $url = 'index.php';
  if ($namespace) {
    $url = $url . "?namespace=$namespace";
  }
  return $url;
}

function renderProductImages($images)
{
  $html = '<div class="row">';
  foreach ($images as $image) {
    $html .= '<div class="col-md-3">
      <div class="product-image">
        <span class="delete-image" data-id="' . $image->id . '"><i class="fa fa-remove"></i></span>
        <img src="' . $image->image . '">
       </div>
     </div>';
  }
  $html .= '</div>';
  return $html;
}

function remove_dir($path) {
  if (is_dir($path)) {
    $files = array_diff(scandir($path), array('.', '..'));
    foreach ($files as $file) {
      unlink(realpath($path) . '/' . $file);
    }
    return rmdir($path);
  }
  return null;
}

function getProductFirstImage($product) {
  $images = $product->getImages();
  if(count($images) > 0) {
    return $images[0]->image;
  }
  return 'views/assets/images/no-image.png';
}
