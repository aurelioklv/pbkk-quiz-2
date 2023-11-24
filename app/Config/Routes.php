<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/index', 'Admin::index');
$routes->get('/admin/buku', 'Admin::buku');
$routes->get('/admin/transaction', 'Admin::transaction');
$routes->get('/user', 'User::index');
$routes->get('/login', 'Home::index');
$routes->get('/register', 'Home::register');
$routes->get('/home/register', 'Home::register');
$routes->get('/home/user', 'Home::user');
