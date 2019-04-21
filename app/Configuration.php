<?php
namespace App;

use Yesf\Http\Router;

class Configuration {
	public function setRouter(Router $router) {
		// this is an example
		$router->get('/', 'index.index.index');
	}
}