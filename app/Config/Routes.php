<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User::index');
$routes->get('/login', 'Home::index');
$routes->get('/register', 'Home::register');
$routes->get('/home/register', 'Home::register');
$routes->get('/home/user', 'Home::user');
