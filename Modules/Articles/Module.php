<?php

namespace Modules\Articles;

use System\Contracts\IModule;
use System\Contracts\IRouter;

use Modules\Articles\Controllers\Index as IndexController;

class Module implements IModule {

  public function registerRoutes(IRouter $router): void {
    $router->addRoute('', IndexController::class);
    $router->addRoute('article/1', IndexController::class, 'item');
    $router->addRoute('article/1', IndexController::class, 'item');
  }

}
