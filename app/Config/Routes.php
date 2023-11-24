<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User::index');
$routes->get('/user', 'User::index');
$routes->get('/login', 'Home::index');
$routes->get('/register', 'Home::register');

$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/user/', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/user/(:num)', 'Admin::user/$1', ['filter' => 'role:admin']);

$routes->get('/admin/book', 'Book::index', ['filter' => 'role:admin']);
$routes->get('/admin/book/add', 'Book::add', ['filter' => 'role:admin']);
$routes->get('/admin/book/edit/(:segment)', 'Book::edit/$1', ['filter' => 'role:admin']);
$routes->get('/admin/book/(:segment)', 'Book::detail/$1', ['filter' => 'role:admin']);
$routes->post('/admin/book/save', 'Book::save', ['filter' => 'role:admin']);
$routes->post('/admin/book/update/(:num)', 'Book::update/$1', ['filter' => 'role:admin']);
$routes->delete('/admin/book/(:num)', 'Book::delete/$1', ['filter' => 'role:admin']);

$routes->get('/admin/transaction', 'Admin::transaction', ['filter' => 'role:admin']);

$routes->get('/user/catalogue', 'Book::index', ['filter' => 'role:user']);
$routes->get('/user/cart', 'User::cart', ['filter' => 'role:user']);
$routes->get('/user/transaction', 'User::transaction', ['filter' => 'role:user']);
