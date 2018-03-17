<?php

namespace Core;

use Core\Request;

Class Controller
{
  private static $_render;
  public $model;
  public function __construct()
  {
   $this->param=new Request();
   //$this->model = str_replace('Controller', 'Model', get_class($this));
   //$this->model = new $this->model($this->params);
   //var_dump($this->param);
  }

  protected function render($view, $scope = [])
  {
    extract($scope);
    $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', str_replace('Controller', '', basename(get_class($this))), $view]) . '.php';
// var_dump($f);
    if (file_exists($f))
    {
      ob_start();
      include($f);
      $view = ob_get_clean();
      // var_dump($view);
      ob_start();
      include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', 'index']) . '.php');
      self::$_render = ob_get_clean();
      echo self::$_render;
    }
  }
}
?>
