<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TaskController::welcome');
$routes->get('tasks', 'TaskController::index');
$routes->get('profile', 'UserController::index');
$routes->get('about', 'AboutController::index');
