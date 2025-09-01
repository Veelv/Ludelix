<?php

/*
|--------------------------------------------------------------------------
| Bootstrap the Ludelix Framework Application
|--------------------------------------------------------------------------
|
| This script initializes the Ludelix framework application by loading
| dependencies, setting up the container, and booting the framework.
| It also registers global middleware and loads application routes.
|
*/

// Load Composer autoloader
require_once __DIR__ . '/../vendor/autoload.php';

// Load environment variables
$envLoader = new \Ludelix\Bootstrap\Runtime\EnvironmentLoader(__DIR__ . '/..');
$envLoader->load();

// Create container instance
$container = new \Ludelix\Core\Container();

// For now, we'll skip providers to avoid constructor issues
// Providers can be added later when the framework is more stable

// Create framework instance
$app = new \Ludelix\Core\Framework(__DIR__ . '/..');

// Boot the framework
$app->boot();

// Initialize Bridge with container
\Ludelix\Bridge\Bridge::instance($app->container());

// Register global middleware directly on the Router, which is the correct approach in this framework.
// Order is important: SecurityHeaders and CsrfMiddleware at the entry, InjectCsrfToken at the exit.
\Ludelix\Bridge\Bridge::route()->middleware([
    \Ludelix\Core\Middleware\SecurityHeadersMiddleware::class,
    \Ludelix\Core\Middleware\CsrfMiddleware::class,
    \Ludelix\Core\Middleware\InjectCsrfTokenMiddleware::class,
]);

// Load routes if not in console mode
if (php_sapi_name() !== 'cli') {
    $router = \Ludelix\Bridge\Bridge::route();
    \Ludelix\Routing\Helpers\RouteLoader::loadAll($router, $app->basePath() . '/routes');
}

return $app;