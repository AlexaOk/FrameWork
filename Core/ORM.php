<?php

namespace Core;
Use \Core\Database;
Use PDO;

class ORM
{
  public  function  __construct()
  {
    try
    {
      $this->bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
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
  public function create($table, $fields)
  {
    $val='';
    $keys='';
    foreach ($fields as $key => $value) {
      $val .= "'".$value."'".',';
      $keys.="`".$key."`".',';
    }
    $val = rtrim($val, ',');
    $keys = rtrim($keys, ",");

    try {
      $reponse = $this->bdd->prepare("INSERT INTO $table ($keys) VALUES ($val)");
      //var_dump($reponse);
      $reponse->execute();
      return $this->bdd->lastInsertId();

    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }

  }

  public function update($table, $id, $fields)
  {
    $req='';
    foreach ($fields as $key => $value){
      $req.=$key."='".$value."',";
    }
    $req=rtrim($req, ',');
    try {
      $reponse = $this->bdd->prepare("UPDATE $table SET $req  WHERE id='$id'");
      $reponse->execute();
  //    var_dump($reponse);
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }
  public function delete($table, $id)
  {
    try {
      $reponse = $this->bdd->prepare("DELETE FROM $table WHERE id='$id'");
      $reponse->execute();
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }
  public function read_all($table)
  {
    $liste=[];
    try
    {
      $reponse = $this->bdd->prepare("SELECT * FROM $table");
      if($reponse->execute())
      {
        while ($row = $reponse->fetch())
        {
          array_push($liste,$row);
        }
        return $liste;
      }
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }
  public function read($table, $id)
  {
    try {
      $reponse = $this->bdd->prepare("SELECT * FROM $table WHERE id='$id' ");
      if($reponse->execute())
      {
        $result=[];
        while($row=$reponse->fetch())
        {
          array_push($result, $row);
        }
      }
          return $result;
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }
}
?>
