<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::home');
$routes->get('/Ajout' , 'Home::ajout');
$routes->get('/Suppression' , 'Home::suppression');
$routes->get('/ApresAjout', 'Home::aajout');
$routes->get('/Modification' , 'Home::modification');
$routes->get('/Modifier' , 'Home::modifier');
$routes->get('/Search' , 'Home::search');
