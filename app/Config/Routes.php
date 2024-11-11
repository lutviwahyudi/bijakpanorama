<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/timer', 'Home::timer');
$routes->get('/contact', 'Contact::index');
$routes->get('/about', 'Home::about');
$routes->get('/kamar', 'Kamar::index');
$routes->get('/kamar/pesan', 'Kamar::pesan');
$routes->get('/kamar/submit_tamu', 'Kamar::submit_tamu');
$routes->setAutoRoute(true);


