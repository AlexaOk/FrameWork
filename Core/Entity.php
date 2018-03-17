<?php

namespace Core;

class Entity
{
  public $id;

  public function __construct($param)
  {
    $this->ORM= new ORM();
    $this->param=$param;
    $this->table=get_class($this);
  //  var_dump($this->table);
  }

  public function save()
  {
    $table=$this->table;
    $table = strstr($table, '\\');
    $table=ltrim($table, '\\');
    $table=strtolower($table);
    $table=str_replace('model', '', $table).'s';
  //  var_dump($table);

    return $this->ORM->create($table, $this->param);
  }

  public function modify()
  {
    $table=$this->table;
    $table = strstr($table, '\\');
    $table=ltrim($table, '\\');
    $table=strtolower($table);
    $table=str_replace('model', '', $table).'s';

    return $this->ORM->update($table, $this->id, $this->param);
  }

  public function remove()
  {
    $table=$this->table;
    $table = strstr($table, '\\');
    $table=ltrim($table, '\\');
    $table=strtolower($table);
    $table=str_replace('model', '', $table).'s';

    return $this->ORM->delete($table, $this->id);
  }

  public function readOne()
  {
    $table=$this->table;
    $table = strstr($table, '\\');
    $table=ltrim($table, '\\');
    $table=strtolower($table);
    $table=str_replace('model', '', $table).'s';
    return $this->ORM->read($table, $this->id);
  }

  public function readAll()
  {
    $table=$this->table;
    $table = strstr($table, '\\');
    $table=ltrim($table, '\\');
    $table=strtolower($table);
    $table=str_replace('model', '', $table).'s';
    return $this->ORM->read_all($table);
  }
}
?>
