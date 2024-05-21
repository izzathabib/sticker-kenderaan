<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Login;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Default routing
$routes->get('login',[Login::class, 'index']);
$routes->post('login',[Login::class, 'index']); // Route for login form submision

