<?php

// System
use System\Router;
use System\ModulesDispatcher;
use Systems\Exceptions\Not_Found;

// Modules
use Modules\_base\Module as BaseModule;
use Modules\Articles\Module as ArticlesModule;

const BASE_URL = '/';

try {

    include_once('init.php');

    $router = new Router(BASE_URL);

    $modulesDispatcher = new ModulesDispatcher();

    $modulesDispatcher->add(new BaseModule());
    $modulesDispatcher->add(new ArticlesModule());
  
    $modulesDispatcher->registerRoutes($router);

    $uri = $_SERVER['REQUEST_URI'];

    $activeRoute = $router->resolvePath($uri);

    $activeController = $activeRoute['controller'];
    $activeControllerMethod = $activeRoute['method'];
  
    echo $activeController->$activeControllerMethod();

} 

catch(Not_Found $error){
  echo "<h1 style='color:red'>{$error->getMessage()}</h1>";
}

catch(Exception $error){
  echo "<h1 style='color:red'>{$error->getMessage()}</h1>";
}
