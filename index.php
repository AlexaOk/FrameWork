<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>PiePHP</title>
</head>
<body>

</body>
</html>

<?php
define('BASE_URI',str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));

use Core\Core;

    $app = new Core();
    $arr = $app->run();

    $cont = "Controller\\".$arr['controller'];
    $controller=new $cont;
    $controller->{$arr['action']}();
?>
