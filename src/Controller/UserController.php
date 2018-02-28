<?php
namespace Controller;

Use \Core\Controller;
Use \Model\UserModel;
Use \Core\Database;
use PDO;
use \Core\Request;

class UserController extends Controller
{
  public function add()
  {
      $this->render('register');
  }
  public function registerAction()
  {
      $register = new UserModel();
      $register->save($_POST["mail"],$_POST["password"]);
      // var_dump($this->request);
  }
}
?>
