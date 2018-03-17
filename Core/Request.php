<?php
namespace Core;

Class Request
{
  public function __construct()
  {
    //var_dump($_REQUEST);
    foreach ($_REQUEST as $key => $value)
    {
      $this->{$key}=trim(htmlspecialchars(stripslashes($value)));
      //$value=htmlspecialchars($value);
    }
  }
}


 ?>
