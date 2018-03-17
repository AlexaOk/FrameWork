<?php
namespace Model;

Use \Core\Database;
Use PDO;
Use \Core\ORM;
Use \Core\Entity;

class FilmModel extends Entity
{
  public function GetId()
  {
    $bdd = Database::connect();
    $titre=$_POST["titre"];
    $reponse = $bdd->prepare("SELECT id FROM films WHERE titre = '$titre'");
    if($reponse->execute())
    {
      while ($row = $reponse->fetch())
      {
      return $row['id'];
      }
    }
  }
}
?>
