<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User::index');
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/buku', 'Admin::buku', ['filter' => 'role:admin']);
$routes->get('/admin/transaction', 'Admin::transaction', ['filter' => 'role:admin']);
$routes->get('/user', 'User::index');
$routes->get('/login', 'Home::index');
$routes->get('/register', 'Home::register');
$routes->get('/home/register', 'Home::register');
$routes->get('/home/user', 'Home::user');
