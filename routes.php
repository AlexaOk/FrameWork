<?php

use \Core\Router;

Router::connect('/', ['controller' => 'App', 'action' => 'index']);
Router::connect('/user', ['controller' => 'UserController', 'action' => 'index']);
Router::connect('/user/add', ['controller' => 'UserController', 'action' => 'add']);
Router::connect('/UserController/registerAction', ['controller' => 'UserController', 'action' => 'registerAction'] );
 ?>
