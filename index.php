<?php

// System
use System\Router;
use System\ModulesDispatcher;

// Modules
use Modules\Articles\Module as ArticlesModule;

const BASE_URL = '/';

try {

    include_once('init.php');

    $router = new Router(BASE_URL);

    $modulesDispatcher = new ModulesDispatcher();

    $modulesDispatcher->add(new ArticlesModule());

    $uri = $_SERVER['REQUEST_URI'];

    $activeRoute = $router->resolvePath($uri);

    $activeController = $activeRoute['controller'];
    $activeControllerMethod = $activeRoute['method'];
  
    $activeController->$activeControllerMethod();
    $html = $activeController->render();

    echo $html;

    ?>

    <hr>
    Menu
    <a href="<?=BASE_URL?>">Home</a>
    <a href="<?=BASE_URL?>article/1">Art 1</a>
    <a href="<?=BASE_URL?>article/2">Art 2</a>

    <?php 
    
} 

catch(Throwable $error){
  echo "<h1>Fatal Error</h1>";
  print_r($error);
}
