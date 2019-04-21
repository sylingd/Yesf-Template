<?php
define("APP_PATH",  __DIR__ . '/app/');
require(__DIR__ . '/vendor/autoload.php');
$app = new Yesf\Yesf();
$app->run(APP_PATH . "/Config/env.ini");