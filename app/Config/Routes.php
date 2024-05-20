<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Default routing
$routes->get('pages',[Pages::class, 'index']);
