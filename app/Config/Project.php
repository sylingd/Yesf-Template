<?php
return [
	'name' => 'app',
	'namespace' => 'App\\',
	'charset' => 'utf-8',
	'router' => [
		'map' => true,
		'extension' => true
	],
	'static' => [
		'enable' => true,
		'prefix' => '/',
		'dir' => '@APP/Static'
	],
	'modules' => ['index'],
	'module' => 'index',
	'view' => [
		'auto' => false,
		'extension' => 'phtml'
	]
];