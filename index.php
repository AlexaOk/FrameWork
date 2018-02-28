<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>PiePHP</title>
</head>
<body>
  <pre>$_POST : <?php print_r($_POST) ;?> $_GET : <?php print_r($_GET); ?> $_SERVER : <?php print_r($_SERVER); ?></pre>
</body>
</html>

<?php
define('BASE_URI',str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));

use Core\Core;

    $app = new Core();
    $arr = $app->run();

    $cont = new Controller\UserController();
    $cont-> {$arr['action']}();
?>
