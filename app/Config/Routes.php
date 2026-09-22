<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Grupos::index');
$routes->get('/grupos', 'Grupos::index');