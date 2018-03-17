<?php
namespace Core;
use PDO;

class Database
{
  public static function connect()
  {
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
      return $bdd;
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }
}
?>
