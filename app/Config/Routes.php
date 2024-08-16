<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/news', 'Home::news');
$routes->get('/contact', 'Home::contact');
$routes->get('/about', 'Home::about');


