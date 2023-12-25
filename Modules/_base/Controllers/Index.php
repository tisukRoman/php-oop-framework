<?php

namespace Modules\_base\Controllers;

use System\Contracts\IController;
use System\Exceptions\Not_Found;
use System\Template;

class Index implements IController {
	protected string $title = '';
	protected string $content = '';
	protected array $env;

  public function setEnviroment(array $urlParams): void {
    $this->env = $urlParams;
  }

  public function render(): string {
    return Template::render(__DIR__ . '/../Views/main.html.php', [
      'title' => $this->title,
      'content' => $this->content
    ]);
  }

  public function __call(string $name, array $args) {
    throw new Not_Found('Undefined Action');
  }
}
