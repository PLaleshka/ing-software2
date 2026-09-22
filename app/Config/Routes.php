<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Grupos::index');

// Rutas con nombre: sirven para generar URL desde las vistas.
$routes->get('grupos', 'Grupos::index', ['as' => 'grupos']);

// Ruta con parámetro: (:num) captura el id y lo pasa a Grupos::detalle.
$routes->get('grupos/(:num)', 'Grupos::detalle/$1', ['as' => 'grupos.detalle']);