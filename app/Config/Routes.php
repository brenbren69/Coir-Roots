<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default route
$routes->get('/', 'Home::landing');

// Authentication routes
$routes->get('/register', 'Auth::register');
$routes->post('/save', 'Auth::save');
$routes->get('/login', 'Auth::login');
$routes->post('/auth', 'Auth::auth');
$routes->get('/logout', 'Auth::logout');

// User routes
$routes->get('/welcome', 'User::welcome');
$routes->get('/profile', 'User::profile');
$routes->post('/profile/upload', 'User::upload');
$routes->post('/user/upload', 'User::upload');


// Customer routes
$routes->get('/customer/products', 'Customer::products');
$routes->post('/customer/checkout/start', 'Customer::startCheckout');
$routes->get('/customer/checkout', 'Customer::checkout');
$routes->post('/customer/checkout/place-order', 'Customer::placeOrder');
$routes->get('/customer/transactions', 'Customer::transactions');

// Admin routes
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/edit/(:num)', 'Admin::edit/$1');
$routes->post('/admin/update/(:num)', 'Admin::update/$1');
$routes->get('/admin/delete/(:num)', 'Admin::delete/$1');

$routes->group('admin', ['filter' => 'admin'], function($routes) {

    $routes->get('manage_products', 'Admin::manage_products');
    $routes->get('add_product', 'Admin::add_product');
    $routes->post('save_product', 'Admin::save_product');
    $routes->get('edit_product/(:num)', 'Admin::edit_product/$1');
    $routes->post('update_product/(:num)', 'Admin::update_product/$1');
    $routes->get('delete_product/(:num)', 'Admin::delete_product/$1');

});

// Customer Support
$routes->get('customer/support', 'Support::index');
$routes->post('customer/support/send', 'Support::send');
