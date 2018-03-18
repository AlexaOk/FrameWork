<?php
namespace Model;

Use \Core\Database;
Use PDO;
Use \Core\ORM;
Use \Core\Entity;

class UserModel extends Entity
{
  public $email;
  private $password;


  public function login()
  {
    $bdd = Database::connect();
    $flag = false;
    $email=$_POST["email"];
    $password=$_POST["password"];
    $reponse = $bdd->prepare("SELECT password FROM users WHERE email = '$email'");
    if($reponse->execute())
    {
      while ($row = $reponse->fetch())
      {
        if($password == $row['password'])
        $flag = true;
      }
    }
     return $flag;
  }

  public function getInfos()
  {
    $bdd = Database::connect();
    $email=$_POST["email"];
    $password=$_POST["password"];
    $reponse = $bdd->prepare("SELECT * FROM users WHERE email = '$email'");
    if($reponse->execute())
    {
      while ($row = $reponse->fetch())
      {
        if($password == $row['password'])
        return $row;
      }
    }
  }
  public function getInfosByName()
    {
      $bdd = Database::connect();
      $name=$_SESSION["name"];
      $reponse = $bdd->prepare("SELECT * FROM users WHERE name = '$name'");
      if($reponse->execute())
      {
        while ($row = $reponse->fetch())
        {
          if($name == $row['name'])
          return $row['id'];
        }
      }
    }
}
?>
