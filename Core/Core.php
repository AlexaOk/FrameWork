<?php
namespace Core;

class Core
{
  public function run()
  {
    $url=$_SERVER['REQUEST_URI'];
    $split=explode("/", trim($url));
    $array=[];

    foreach ($split as $key => $value)
    {
      if($value!='')
      {
        array_push($array, $value);
      }
    }
    array_shift($array);
    $uri='/'.implode('/', $array);
    echo '<pre>';

    $z=Router::get($uri);
    var_dump($z);
//    $z->Router::get();

return $z;
  }
}
 ?>
