<?php
require_once 'config/style.php';
require_once 'db/config.php';
//file_exists

class Main {

    public function getServer() {
        $dir = 'view/';
        $url = $_SERVER['REQUEST_URI'];
        $routes = require_once 'config/routes.php';
       foreach($routes as $rout => $view){
           if(preg_match($rout, $url) && file_exists($dir.$view.'.php')) {
            require_once $dir.$view.'.php';die;
        }
       }
        if(!preg_match($rout, $url) && file_exists($dir.$view.'.php')){
            require_once $dir.'505.php';
       }
    }
}


Main::getServer();

?>
