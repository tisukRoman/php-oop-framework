<?php

namespace Modules\_base;

use System\Contracts\IModule;
use System\Contracts\IRouter;

use Modules\_base\Controllers\Index as Controller;

class Module implements IModule {
  public function registerRoutes(IRouter $router): void {
    $router->addRoute('', Controller::class);
  }
}
