<?php
namespace Controller;

Use \Core\Controller;
Use \Model\UserModel;
Use \Core\Database;
use PDO;
use \Core\Request;
Use \Core\ORM;

class UserController extends Controller
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
    $this->id=$register->save();
    $_SESSION['id']=$this->id;
    $this->render('index');
  }

  public function log()
  {
    if(!empty($_POST["email"]) && !empty($_POST["password"]))
    {
      $log = new UserModel($this->param);
      if($this->id=$log->login())
      {
        $this->render('index', [
          "userInfos"=>$log->getInfos()
        ]);
        $_SESSION['id']=$this->id;
      }
      elseif($log->login()==false)
      {
        $this->render('login');
      }
    }
    else
    {
      $this->render('login');
    }
  }
  public function logout()
  {
    $logout=new UserModel($this->param);
    $this->render('login');
  }
}
?>
