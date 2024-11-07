<?php

require 'vendor/autoload.php';

use Pecee\SimpleRouter\SimpleRouter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

session_start();

DEFINE('BASE_URL', 'https://localhost/');
DEFINE('CWD', __DIR__);
DEFINE('APP_TITLE', 'Portfolio');
DEFINE('DB_FILE', CWD . 'database.db');
DEFINE('TEMPLATE_PATH', CWD . '/src/Views');
DEFINE('CACHE_PATH', CWD . '/.cache');

// Create the PDO instance
$database = new PDO('sqlite:' . DB_FILE);
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$log = new Logger('app');
$log->pushHandler(new StreamHandler(__DIR__ . '/logs/app.log'));

// Create the DI container and register the PDO instance
$containerBuilder = new DI\ContainerBuilder();
$containerBuilder->useAutowiring(true);
$container = $containerBuilder->build();

// Bind the PDO class directly in the container
$container->set(PDO::class, $database);
$container->set(Logger::class, $log);

SimpleRouter::setCustomClassLoader(new App\Providers\ClassLoader($container));
// Load the routes
SimpleRouter::get('/', 'App\Controllers\IndexController@index');

SimpleRouter::start();