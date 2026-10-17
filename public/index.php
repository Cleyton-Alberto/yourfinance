<?php
require_once __DIR__ . '/../vendor/autoload.php';

use YourFinance\Controllers\HomeController;

$homeController = new HomeController();
$homeController->index();