<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Controllers\MyController;

$app = new MyController;
$app->run();
