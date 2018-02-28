<?php
namespace Model;

Use \Core\Database;
Use PDO;

class UserModel
{
  public $mail;
  public $mdp;
  //public $bdd;
  public  function  __construct()
  {
    try
    {
      $this->bdd = new PDO('mysql:host=localhost;dbname=pie_database;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }
  public function setBdd($bdd)
  {
    $this->bdd=$bdd;
  }
  public function setMail($mail)
  {
    $this->mail= $mail;
  }
  public function setMdp($mdp)
  {
    $this->mdp = $mdp;
  }
  public function save($mail, $mdp)
  {
    
    try {
      $reponse = $this->bdd->prepare("INSERT INTO users (`email`,`password`) VALUES ('$mail','$mdp')");
      $reponse->execute(array($this->mail,$this->mdp));
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }

  public function create($mail, $mdp)
  {
    try {
      $reponse = $this->bdd->prepare("INSERT INTO users (`email`,`password`) VALUES ('$mail','$mdp')");
      $reponse->execute(array($this->mail,$this->mdp));
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }
  public function read($id)
  {
    try {
      $reponse = $this->bdd->prepare("SELECT * FROM users WHERE id='$id'");
      $reponse->execute(array($this->id));
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }
  public function update($id)
  {
    try {
      $reponse = $this->bdd->prepare("UPDATE email, password FROM users WHERE id='$id'");
      $reponse->execute(array($this->id));
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }
  public function delete($id)
  {
    try {
      $reponse = $this->bdd->prepare("DELETE FROM users WHERE id='$id'");
      $reponse->execute(array($this->id));
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }
  public function read_all()
  {
    try {
      $reponse = $this->bdd->prepare("SELECT * FROM users");
      $reponse->execute();
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }
}
?>
