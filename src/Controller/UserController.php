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
    $this->render('index', [
      "userInfos"=>$register->getInfos()
    ]);
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
  public function modify()
  {
    $this->render('modifyForm');
  }
  public function modifyInfos()
  {
    $modif=new UserModel($this->param);
    $modif->id=$modif-> getInfosByName();
    $modif->modify();
    $this->render('modifySuccess');
  }
  public function deleteAccount()
  {
    $account = new UserModel($this->param);
    $account->id=$account->getInfosByName();
    $account->remove();
    $this->render('delete');
  }
  public function details()
  {
    $detail=new UserModel($this->param);
    $detail->id = $detail->getInfosByName();
    $this->render('details', [
      "details"=>$detail->readOne()
    ]);
  }
}
?>
