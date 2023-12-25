<?php

namespace System;

use System\Contracts\IRouter;
use System\Exceptions\Not_Found;

class Router implements IRouter {
	protected string $baseUrl;
	protected int $baseShift;
	protected array $routes = [];

	public function __construct(string $baseUrl = ''){
		$this->baseUrl = $baseUrl;
		$this->baseShift = strlen($this->baseUrl);
	}

	public function addRoute(string $url, string $controllerName, string $controllerMethod = 'index'): void {
		$this->routes[] = [
			'path' => $url,
			'c' => $controllerName,
			'm' => $controllerMethod
		];
	}

	public function resolvePath(string $url) : array{
		$relativeUrl = substr($url, $this->baseShift);
		$route = $this->findPath($relativeUrl);
		$params = explode('/', $relativeUrl);
		$controller = new $route['c']();
		$controller->setEnviroment($params);

		return [
			'controller' => $controller,
			'method' => $route['m']
		];
	}

	protected function findPath(string $url) : ?array{
		$activeRoute = null;

		foreach($this->routes as $route){
			if($url === $route['path']){
				$activeRoute = $route;
			}
		}

    if($activeRoute == null){
      throw new Not_Found('404 <br> Page does not exist');
    }

		return $activeRoute;
	}
}
