<?php

function my_autoloader($class)
{
    //include 'Core/'.'Core.php';
// require_once($class.'.php')
    //créer le filename ou nom du fichier de la classe à accéder comme dans l'index.php

    if(file_exists("$class.php"))
    {
        $filename =str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
      include($filename);
    }
    elseif(file_exists("./src/$class.php"))
    {
      include("./src/$class.php");
    }
    // $filename = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    // include($filename);
    // var_dump($filename);
}

spl_autoload_register('my_autoloader');


 ?>
