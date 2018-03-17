<?php
namespace Controller;

Use \Core\Controller;
Use \Model\FilmModel;
Use \Model\UserModel;
Use \Core\Database;
use PDO;
use \Core\Request;
Use \Core\ORM;

class FilmController extends Controller
{
  public function list()
  {
    $list = new FilmModel($this->param);
    $list->readAll();
    $this->render('list', [
      "list"=>$list->readAll()
    ]);
  }
  public function details()
  {
    $detail=new FilmModel($this->param);
    $detail->id = $detail->GetId();
    $this->render('details', [
      "details"=>$detail->readOne()
    ]);
  }
  public function addForm()
  {
    $this->render('addForm');
  }
  public function registerAction()
  {
    $register = new FilmModel($this->param);
    $register->save();
    $this->render('addSuccess');
  }
  public function deleteMovie()
  {
    $movie = new FilmModel($this->param);
    $movie->id=$_POST['id'];
    $movie->remove();
    $this->render('delete');
  }
  public function modifyForm()
  {
  $this->render('modifyForm');
  }
  public function modifyResum()
  {
    $movie = new FilmModel($this->param);
    $movie->id=$_POST['id'];
    $movie->modify();
    $this->render('modifySuccess');
  }
}
?>
