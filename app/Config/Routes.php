<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//crud
$routes->get('/', 'Home::index');
$routes->get('/create','UserController::create');
$routes->post('/create','UserController::create');
$routes->get('/read','UserController::read');
$routes->get("/update/(:num)",'UserController::update/$1');
$routes->post("/update/(:num)",'UserController::update/$1');
$routes->get('/delete/(:num)','UserController::delete/$1');
$routes->get('/single/(:num)','UserController::singleRead/$1');
$routes->get('/search','UserController::search');
$routes->post('/search','UserController::search');

//api
$routes->group('api',function($routes){
    $routes->post('create','ApiController::create');
    $routes->get('read','ApiController::read');
    $routes->post('update/(:num)','ApiController::update/$1');
    $routes->get('delete/(:num)','ApiController::delete/$1');
    $routes->get('single/(:num)','ApiController::singleRead/$1');
    $routes->get('search/(:any)','ApiController::search/$1');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
