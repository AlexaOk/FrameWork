<?php
namespace Controller;

Use \Core\Controller;
Use \Model\UserModel;
Use \Core\Database;
use PDO;
use \Core\Request;
Use \Core\ORM;

class AppController extends Controller
{
  public function add()
  {
      $this->render('register');
  }
  public function index()
  {
      $this->render('index');
  }
  public function registerAction()
  {
      $register = new UserModel($this->param);
      $register->save();
  }
}
?>
