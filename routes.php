<?php

use \Core\Router;

Router::connect('/', ['controller' => 'AppController', 'action' => 'index']);
Router::connect('/user', ['controller' => 'UserController', 'action' => 'index']);
Router::connect('/user/add', ['controller' => 'UserController', 'action' => 'add']);
Router::connect('/user/register', ['controller' => 'UserController', 'action' => 'registerAction'] );
Router::connect('/user/log', ['controller' => 'UserController', 'action' => 'log'] );
Router::connect('/user/logout', ['controller' => 'UserController', 'action' => 'logout'] );
Router::connect('/user/delete', ['controller' => 'UserController', 'action' => 'deleteAccount'] );
Router::connect('/user/modify', ['controller' => 'UserController', 'action' => 'modify'] );
Router::connect('/user/infos', ['controller' => 'UserController', 'action' => 'details'] );
Router::connect('/user/modifySuccess', ['controller' => 'UserController', 'action' => 'modifyInfos'] );
Router::connect('/film/list', ['controller' => 'FilmController', 'action' => 'list'] );
Router::connect('/film/details', ['controller' => 'FilmController', 'action' => 'details'] );
Router::connect('/film/add', ['controller' => 'FilmController', 'action' => 'addForm'] );
Router::connect('/film/register', ['controller' => 'FilmController', 'action' => 'registerAction'] );
Router::connect('/film/delete', ['controller' => 'FilmController', 'action' => 'deleteMovie'] );
Router::connect('/film/modify', ['controller' => 'FilmController', 'action' => 'modifyForm'] );
Router::connect('/film/movieUpdate', ['controller' => 'FilmController', 'action' => 'modifyResum'] );
 ?>
